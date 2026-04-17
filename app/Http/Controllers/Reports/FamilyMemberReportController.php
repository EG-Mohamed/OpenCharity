<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\FamilyMember;
use App\Services\Reports\FamilyMemberReportOptions;
use App\Services\Reports\FamilyMemberReportService;
use App\Services\Reports\PdfGenerator;
use Illuminate\Http\Request;

class FamilyMemberReportController extends Controller
{
    public function __invoke(Request $request, FamilyMember $familyMember): PdfGenerator
    {
        $options = FamilyMemberReportOptions::fromArray($request->all());

        return (new FamilyMemberReportService)->generate($familyMember, $options);
    }
}
