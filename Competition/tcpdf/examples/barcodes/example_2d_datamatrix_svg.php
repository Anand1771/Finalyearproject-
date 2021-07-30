<?php
// include 2D barcode class (search for installation path)
require_once(dirname(__FILE__).'/tcpdf_barcodes_2d_include.php');

// set the barcode content and type
$barcodeobj = new TCPDF2DBarcode('http://www.tcpdf.org', 'DATAMATRIX');

// output the barcode as SVG image
$barcodeobj->getBarcodeSVG(6, 6, 'black');

//============================================================+
// END OF FILE
//============================================================+
