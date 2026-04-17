<?php

namespace App\Services\Reports;

readonly class FamilyMemberReportOptions
{
    public function __construct(
        public bool $includeFamilyDetails = true,
        public bool $includeOtherMembers = true,
        public bool $includeCharityCases = true,
        public bool $includeVisits = true,
        public bool $includeAssistanceSchedules = true,
        public bool $includeDocuments = true,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            includeFamilyDetails: (bool) ($data['include_family_details'] ?? true),
            includeOtherMembers: (bool) ($data['include_other_members'] ?? true),
            includeCharityCases: (bool) ($data['include_charity_cases'] ?? true),
            includeVisits: (bool) ($data['include_visits'] ?? true),
            includeAssistanceSchedules: (bool) ($data['include_assistance_schedules'] ?? true),
            includeDocuments: (bool) ($data['include_documents'] ?? true),
        );
    }
}
