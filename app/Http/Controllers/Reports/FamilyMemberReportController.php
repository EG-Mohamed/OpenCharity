<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\FamilyMember;
use App\Services\Reports\FamilyMemberReportService;
use App\Services\Reports\PdfGenerator;

class FamilyMemberReportController extends Controller
{
    public function __invoke(FamilyMember $familyMember): PdfGenerator
    {
        return (new FamilyMemberReportService)->generate($familyMember);
    }
}
