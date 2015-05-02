<?php session_start(); ?>
<?php
if(isset($_SESSION['html_str'])) {
    require_once('dompdf/dompdf_config.inc.php');

    $html = $_SESSION['html_str'];

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream("sample.pdf");
}

