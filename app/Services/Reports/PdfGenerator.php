<?php

namespace App\Services\Reports;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\View;
use Mpdf\Mpdf;
use Symfony\Component\HttpFoundation\Response;

class PdfGenerator implements Responsable
{
    public function __construct(
        public string $view,
        public array $data = [],
        public string $fileName = 'document.pdf',
    ) {}

    public function toResponse($request): Response
    {
        $html = View::make($this->view, $this->data)->render();

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'default_font' => 'cairo',
            'autoScriptToLang' => true,
            'autoLangToFont' => true,
            'tempDir' => storage_path('app/mpdf'),
            'fontDir' => [public_path('fonts')],
            'fontdata' => [
                'cairo' => [
                    'R' => 'Cairo-Regular.ttf',
                    'B' => 'Cairo-Bold.ttf',
                    'useOTL' => 0xFF,
                    'useKashida' => 75,
                ],
            ],
        ]);

        $mpdf->SetDirectionality('rtl');
        $mpdf->WriteHTML($html);

        return new Response(
            $mpdf->Output($this->fileName, 'D'),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="'.$this->fileName.'"',
            ]
        );
    }
}
