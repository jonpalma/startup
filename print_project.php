<?php
    require('modules/phpToPDF.php');
    $source = "http://" . $_SERVER['HTTP_HOST'] . "/pdf.php";
    //Set Your Options -- see documentation for all options
    $pdf_options = array(
          "source_type" => 'url',
          "source" => $source,
          "action" => 'view');

    //Code to generate PDF file from options above
    phptopdf($pdf_options);