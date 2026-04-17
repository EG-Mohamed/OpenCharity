<?php

namespace App\Services\Reports;

use App\Models\FamilyMember;

class FamilyMemberReportService
{
    public function generate(FamilyMember $member, FamilyMemberReportOptions $options): PdfGenerator
    {
        $relations = [
            'diseases',
            'nationality',
        ];

        if ($options->includeFamilyDetails) {
            $relations[] = 'family.state';
            $relations[] = 'family.city';
            $relations[] = 'family.neighborhood';
        }

        if ($options->includeOtherMembers) {
            $relations[] = 'family.familyMembers.diseases';
            $relations[] = 'family.familyMembers.nationality';
        }

        if ($options->includeCharityCases) {
            $relations[] = 'charityCases.caseType';

            if ($options->includeVisits) {
                $relations[] = 'charityCases.visits';
            }

            if ($options->includeAssistanceSchedules) {
                $relations[] = 'charityCases.assistanceSchedules.assistanceType';
            }
        } elseif ($options->includeVisits) {
            $relations[] = 'visits';
        }

        if ($options->includeDocuments) {
            $relations[] = 'family.documents';
        }

        $member->load($relations);

        return new PdfGenerator(
            view: 'pdf.reports.family-member',
            data: [
                'member' => $member,
                'options' => $options,
                'generatedAt' => now()->locale(app()->getLocale()),
            ],
            fileName: "member-{$member->id}.pdf",
        );
    }
}
