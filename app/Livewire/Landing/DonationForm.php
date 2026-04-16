<?php

namespace App\Livewire\Landing;

use App\Enums\PaymentMethod;
use App\Models\DonationTarget;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Attributes\Locked;
use Livewire\Component;

class DonationForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public array $presetAmounts = [50, 100, 250, 500];

    public array $targetOptions = [];

    public bool $submitted = false;

    #[Locked]
    public ?string $defaultType = null;

    #[Locked]
    public ?int $defaultTargetId = null;

    public function mount(Collection $targets, ?string $defaultType = null, ?int $defaultTargetId = null): void
    {
        $this->targetOptions = $targets
            ->mapWithKeys(fn (DonationTarget $target): array => [$target->id => $target->title])
            ->all();

        $this->defaultType = $defaultType;
        $this->defaultTargetId = $defaultTargetId;

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

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('بيانات التبرع'))
                    ->compact()
                    ->schema([
                        Radio::make('donation_type')
                            ->label(__('نوع التبرع'))
                            ->options([
                                'general' => __('عام'),
                                'family' => __('عائلة'),
                                'case' => __('حالة'),
                                'campaign' => __('حملة'),
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->default('general')
                            ->live(),
                        Select::make('preset_amount')
                            ->label(__('مبالغ سريعة'))
                            ->options(collect($this->presetAmounts)->mapWithKeys(fn (int $amount): array => [$amount => $amount.' '.__('ج.م')])->all())
                            ->placeholder(__('اختر مبلغاً سريعاً'))
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set): void {
                                if (filled($state)) {
                                    $set('amount', (int) $state);
                                }
                            }),
                        TextInput::make('amount')
                            ->label(__('المبلغ'))
                            ->numeric()
                            ->minValue(1)
                            ->prefix(__('ج.م'))
                            ->required(),
                        Select::make('donation_target_id')
                            ->label(__('الجهة المستهدفة'))
                            ->options($this->targetOptions)
                            ->searchable()
                            ->visible(fn (callable $get): bool => $get('donation_type') !== 'general')
                            ->required(fn (callable $get): bool => $get('donation_type') !== 'general'),
                    ]),
                Section::make(__('بيانات المتبرع'))
                    ->compact()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('donor_name')
                                    ->label(__('الاسم'))
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('donor_email')
                                    ->label(__('البريد الإلكتروني'))
                                    ->email()
                                    ->maxLength(255),
                                TextInput::make('donor_phone')
                                    ->label(__('رقم الهاتف'))
                                    ->tel()
                                    ->maxLength(30),
                                Radio::make('payment_method')
                                    ->label(__('طريقة الدفع'))
                                    ->options([
                                        PaymentMethod::Card->value => __('بطاقة'),
                                        PaymentMethod::Wallet->value => __('محفظة'),
                                        PaymentMethod::BankTransfer->value => __('تحويل بنكي'),
                                    ])
                                    ->default(PaymentMethod::Card->value)
                                    ->inline()
                                    ->inlineLabel(false)
                                    ->required(),
                            ]),
                        Toggle::make('anonymous')
                            ->label(__('تبرع باسم مجهول'))
                            ->default(false),
                        Hidden::make('preset_amount'),
                    ]),
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $this->form->getState();

        $this->submitted = true;
    }

    public function render(): View
    {
        return view('livewire.landing.donation-form');
    }
}
