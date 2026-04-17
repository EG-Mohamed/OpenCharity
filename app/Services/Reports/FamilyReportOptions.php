<?php

namespace App\Services\Reports;

readonly class FamilyReportOptions
{
    public function __construct(
        public bool $includeMembers = true,
        public bool $includeCharityCases = true,
        public bool $includeVisits = true,
        public bool $includeAssistanceSchedules = true,
        public bool $includeDocuments = true,
        public bool $includeDonations = true,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            includeMembers: (bool) ($data['include_members'] ?? true),
            includeCharityCases: (bool) ($data['include_charity_cases'] ?? true),
            includeVisits: (bool) ($data['include_visits'] ?? true),
            includeAssistanceSchedules: (bool) ($data['include_assistance_schedules'] ?? true),
            includeDocuments: (bool) ($data['include_documents'] ?? true),
            includeDonations: (bool) ($data['include_donations'] ?? true),
        );
    }
}
