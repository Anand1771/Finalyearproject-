<?php
// include 2D barcode class (search for installation path)
require_once(dirname(__FILE__).'/tcpdf_barcodes_2d_include.php');

// set the barcode content and type
$barcodeobj = new TCPDF2DBarcode('http://www.tcpdf.org', 'PDF417');

// output the barcode as PNG image
$barcodeobj->getBarcodePNG(4, 4, array(0,0,0));

//============================================================+
// END OF FILE
//============================================================+
