<?php

use Dompdf\Dompdf;

function pdf_create($html, $filename = '', $stream = TRUE)
{
    require_once APPPATH . 'third_party/dompdf/autoload.inc.php';
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename . ".pdf", array("Attachment" => 1));
    } else {
        return $dompdf->output();
    }
}
