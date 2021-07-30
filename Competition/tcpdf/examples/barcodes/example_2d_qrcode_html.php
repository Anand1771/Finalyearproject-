<?php
// include 2D barcode class (search for installation path)
require_once(dirname(__FILE__).'/tcpdf_barcodes_2d_include.php');

// set the barcode content and type
$barcodeobj = new TCPDF2DBarcode('http://www.tcpdf.org', 'QRCODE,H');

// output the barcode as HTML object
echo $barcodeobj->getBarcodeHTML(6, 6, 'black');

//============================================================+
// END OF FILE
//============================================================+
