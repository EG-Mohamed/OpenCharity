<?php

namespace App\Services\Reports;

use App\Models\FamilyMember;

class FamilyMemberReportService
{
    public function generate(FamilyMember $member): PdfGenerator
    {
        $member->load([
            'family.state',
            'family.city',
            'family.neighborhood',
            'diseases',
            'nationality',
        ]);

        return new PdfGenerator(
            view: 'pdf.reports.family-member',
            data: [
                'member' => $member,
                'generatedAt' => now(),
            ],
            fileName: "member-{$member->id}.pdf",
        );
    }
}
