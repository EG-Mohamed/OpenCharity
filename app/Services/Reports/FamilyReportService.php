<?php

namespace App\Services\Reports;

use App\Models\Family;

class FamilyReportService
{
    public function generate(Family $family, FamilyReportOptions $options): PdfGenerator
    {
        $relations = ['state', 'city', 'neighborhood'];

        if ($options->includeMembers) {
            $relations[] = 'familyMembers.diseases';
            $relations[] = 'familyMembers.nationality';
        }

        if ($options->includeCharityCases) {
            $caseRelations = ['charityCases.caseType'];

            if ($options->includeVisits) {
                $caseRelations[] = 'charityCases.visits';
            }

            if ($options->includeAssistanceSchedules) {
                $caseRelations[] = 'charityCases.assistanceSchedules.assistanceType';
            }

            $relations = array_merge($relations, $caseRelations);
        }

        if ($options->includeDocuments) {
            $relations[] = 'documents';
        }

        if ($options->includeDonations) {
            $relations[] = 'donationTargets';
        }

        $family->load($relations);

        return new PdfGenerator(
            view: 'pdf.reports.family',
            data: [
                'family' => $family,
                'options' => $options,
                'generatedAt' => now()->locale(app()->getLocale()),
            ],
            fileName: "family-{$family->code}.pdf",
        );
    }
}
