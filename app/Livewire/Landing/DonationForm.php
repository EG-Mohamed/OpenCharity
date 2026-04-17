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
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Alignment;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use JaOcero\RadioDeck\Forms\Components\RadioDeck;
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
            'amount' => null,
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
                RadioDeck::make('donation_type')
                    ->label(__('Donation type'))
                    ->options([
                        'general' => __('General'),
                        ...collect(DonationTargetType::cases())
                            ->mapWithKeys(fn ($case) => [
                                $case->value => $case->getLabel(),
                            ])->toArray(),
                    ])
                    ->afterStateUpdated(fn (callable $get, callable $set) => $set('donation_target_id', null))
                    ->required()
                    ->alignment(Alignment::Center) // Start | Center | End
                    ->padding('px-4 py-3') // Padding around the deck
                    ->extraCardsAttributes([ // Extra attributes for card elements
                        'class' => 'rounded-xl'
                    ])
                    ->extraOptionsAttributes([
                        'class' => 'leading-none w-full flex flex-col items-center justify-center'
                    ])
                    ->columns([
                        'sm' => 2,
                        'md' => 3,
                        'lg' => 4,
                    ])
                    ->default('general')
                    ->live(),
                TextInput::make('amount')
                    ->label(__('Amount'))
                    ->numeric()
                    ->minValue(1)
                    ->prefix(__('EGP'))
                    ->required(),
                Select::make('donation_target_id')
                    ->label(__('Target destination'))
                    ->options(fn (Get $get) => DonationTarget::whereStatus(DonationTargetStatus::Active)->whereType($get('donation_type'))->pluck('title', 'id'))
                    ->searchable()
                    ->visible(fn (callable $get): bool => $get('donation_type') !== 'general')
                    ->required(fn (callable $get): bool => $get('donation_type') !== 'general'),
                Fieldset::make(__('Donor information'))
                    ->columns(2)
                    ->schema([
                        ToggleButtons::make('anonymous')
                            ->columnSpanFull()
                            ->boolean()
                            ->inline()
                            ->label(__('Donate anonymously'))
                            ->default(false),
                        TextInput::make('donor_name')
                            ->label(__('Name'))
                            ->required()
                            ->maxLength(255),
                        TextInput::make('donor_email')
                            ->label(__('Email address'))
                            ->email()
                            ->maxLength(255),
                        PhoneInput::make('donor_phone')
                            ->label(__('Phone number'))
                            ->columnSpanFull()
                            ->required(),
                        //                                ToggleButtons::make('payment_method')
                        //                                    ->label(__('Payment method'))
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
                'donation_target_id' => data_get($state,'donation_target_id'),
                'donor_name' => data_get($state,'donor_name'),
                'donor_email' => data_get($state,'donor_email'),
                'donor_phone' => data_get($state,'donor_phone'),
                'amount' => data_get($state,'amount'),
                'currency' => 'EGP',
                'status' => DonationStatus::Pending,
                'payment_gateway' => PaymentGatewayEnum::Paymob,
                'payment_method' => PaymentMethod::Card,
                'anonymous' => (bool) data_get($state,'anonymous'),
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
