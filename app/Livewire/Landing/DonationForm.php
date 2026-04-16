<?php

namespace App\Livewire\Landing;

use App\Contracts\PaymentGateway;
use App\Data\Payments\PaymentInitializationData;
use App\Enums\DonationStatus;
use App\Enums\DonationTargetStatus;
use App\Enums\DonationTargetType;
use App\Enums\PaymentGateway as PaymentGatewayEnum;
use App\Enums\PaymentMethod;
use App\Models\Donation;
use App\Models\DonationTarget;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class DonationForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public array $presetAmounts = [50, 100, 250, 500, 1000, 5000];

    public array $targetOptions = [];

    public bool $submitted = false;

    #[Locked]
    public ?string $defaultType = null;

    #[Locked]
    public ?int $defaultTargetId = null;

    public ?string $selectedTargetTitle = null;

    public function boot(PaymentGateway $paymentGateway): void
    {
        $this->paymentGateway = $paymentGateway;
    }

    protected PaymentGateway $paymentGateway;

    public function mount(Collection $targets, ?string $defaultType = null, ?int $defaultTargetId = null): void
    {
        $this->targetOptions = $targets
            ->mapWithKeys(fn (DonationTarget $target): array => [$target->id => $target->title])
            ->all();

        $this->defaultType = $defaultType;
        $this->defaultTargetId = $defaultTargetId;
        $this->selectedTargetTitle = $defaultTargetId ? ($targets->firstWhere('id', $defaultTargetId)?->title) : null;

        $this->form->fill([
            'donation_type' => $defaultType ?? 'general',
            'donation_target_id' => $defaultTargetId,
            'amount' => 100,
            'donor_name' => null,
            'donor_email' => null,
            'donor_phone' => null,
            'anonymous' => false,
            'payment_method' => PaymentMethod::Card->value,
        ]);
    }

    public function selectTarget(?int $targetId = null, ?string $targetType = null): void
    {
        $selectedType = $targetId === null ? 'general' : ($targetType ?? 'case');
        $selectedTarget = $targetId === null ? null : DonationTarget::query()->find($targetId);

        $this->selectedTargetTitle = $selectedTarget?->title;

        $this->form->fill([
            ...$this->form->getState(),
            'donation_type' => $selectedType,
            'donation_target_id' => $targetId,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Radio::make('donation_type')
                    ->label(__('نوع التبرع'))
                    ->options([
                        'general' => __('عام'),
                        ...collect(DonationTargetType::cases())
                            ->mapWithKeys(fn ($case) => [
                                $case->value => $case->getLabel(),
                            ])->toArray(),
                    ])
                    ->afterStateUpdated(fn (callable $get, callable $set) => $set('donation_target_id', null))
                    ->inline()
                    ->inlineLabel(false)
                    ->default('general')
                    ->live(),
                TextInput::make('amount')
                    ->label(__('المبلغ'))
                    ->numeric()
                    ->minValue(1)
                    ->prefix(__('ج.م'))
                    ->required(),
                Select::make('donation_target_id')
                    ->label(__('الجهة المستهدفة'))
                    ->options(fn (Get $get) => DonationTarget::whereStatus(DonationTargetStatus::Active)->whereType($get('donation_type'))->pluck('title', 'id'))
                    ->searchable()
                    ->visible(fn (callable $get): bool => $get('donation_type') !== 'general')
                    ->required(fn (callable $get): bool => $get('donation_type') !== 'general'),
                Grid::make(2)
                    ->schema([
                        Toggle::make('anonymous')
                            ->columnSpanFull()
                            ->label(__('تبرع باسم مجهول'))
                            ->default(false),
                        TextInput::make('donor_name')
                            ->label(__('الاسم'))
                            ->required()
                            ->maxLength(255),
                        TextInput::make('donor_email')
                            ->label(__('البريد الإلكتروني'))
                            ->email()
                            ->maxLength(255),
                        PhoneInput::make('donor_phone')
                            ->label(__('رقم الهاتف'))
                            ->columnSpanFull()
                            ->required(),
                        //                                ToggleButtons::make('payment_method')
                        //                                    ->label(__('طريقة الدفع'))
                        //                                    ->options(PaymentMethod::class)
                        //                                    ->columnSpanFull()
                        //                                    ->default(PaymentMethod::Card)
                        //                                    ->inline()
                        //                                    ->inlineLabel(false)
                        //                                    ->required(),
                    ]),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        $donation = DB::transaction(function () use ($state): Donation {
            return Donation::query()->create([
                'donation_target_id' => $state['donation_target_id'] ?: null,
                'donor_name' => $state['donor_name'],
                'donor_email' => $state['donor_email'],
                'donor_phone' => $state['donor_phone'],
                'amount' => $state['amount'],
                'currency' => 'EGP',
                'status' => DonationStatus::Pending,
                'payment_gateway' => PaymentGatewayEnum::Paymob,
                'payment_method' => PaymentMethod::Card,
                'anonymous' => (bool) $state['anonymous'],
            ]);
        });

        $payment = $this->paymentGateway->initialize($donation, new PaymentInitializationData(
            currency: 'EGP',
            returnUrl: route('payments.paymob.callback'),
            callbackUrl: route('payments.paymob.callback'),
        ));

        $donation->update([
            'transaction_id' => $payment->transactionId,
        ]);

        $this->submitted = true;

        $this->redirect($payment->redirectUrl, navigate: false);
    }

    public function render(): View
    {
        return view('livewire.landing.donation-form');
    }
}
