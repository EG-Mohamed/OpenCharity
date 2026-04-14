<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum DocumentType: string implements HasColor, HasIcon, HasLabel
{
    case NationalId = 'national_id';
    case BirthCertificate = 'birth_certificate';
    case MarriageCertificate = 'marriage_certificate';
    case DeathCertificate = 'death_certificate';
    case IncomeProof = 'income_proof';
    case RentContract = 'rent_contract';
    case UtilityBill = 'utility_bill';
    case MedicalReport = 'medical_report';
    case Prescription = 'prescription';
    case CommitteeDecision = 'committee_decision';
    case SocialResearch = 'social_research';
    case Photo = 'photo';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::NationalId => __('National ID'),
            self::BirthCertificate => __('Birth Certificate'),
            self::MarriageCertificate => __('Marriage Certificate'),
            self::DeathCertificate => __('Death Certificate'),
            self::IncomeProof => __('Income Proof'),
            self::RentContract => __('Rent Contract'),
            self::UtilityBill => __('Utility Bill'),
            self::MedicalReport => __('Medical Report'),
            self::Prescription => __('Prescription'),
            self::CommitteeDecision => __('Committee Decision'),
            self::SocialResearch => __('Social Research'),
            self::Photo => __('Photo'),
            self::Other => __('Other'),
        };
    }

    public function getColor(): string|array|null
    {
        return 'gray';
    }

    public function getIcon(): ?Heroicon
    {
        return Heroicon::DocumentText;
    }
}
