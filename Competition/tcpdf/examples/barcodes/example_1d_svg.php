<?php
// include 1D barcode class (search for installation path)
require_once(dirname(__FILE__).'/tcpdf_barcodes_1d_include.php');

// set the barcode content and type
$barcodeobj = new TCPDFBarcode('http://www.tcpdf.org', 'C128');

// output the barcode as SVG image
$barcodeobj->getBarcodeSVG(2, 30, 'black');

//============================================================+
// END OF FILE
//============================================================+
