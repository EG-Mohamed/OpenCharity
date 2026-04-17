<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Services\Reports\FamilyReportOptions;
use App\Services\Reports\FamilyReportService;
use App\Services\Reports\PdfGenerator;
use Illuminate\Http\Request;

class FamilyReportController extends Controller
{
    public function __invoke(Request $request, Family $family): PdfGenerator
    {
        $options = FamilyReportOptions::fromArray($request->all());

        return (new FamilyReportService)->generate($family, $options);
    }
}
