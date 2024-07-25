<?php
// Periksa apakah Composer autoload file ada
if (file_exists(APPPATH . 'vendor/autoload.php')) {
    require_once APPPATH . 'vendor/autoload.php';
}

use Dompdf\Dompdf;

class Dompdf_lib
{
    public function __construct()
    {
        $pdf = new Dompdf();
        $CI = &get_instance();
        $CI->dompdf = $pdf;
    }
}
