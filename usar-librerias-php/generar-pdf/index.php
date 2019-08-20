<?php


require '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$Html2Pdf = new Html2Pdf();
ob_start();
require_once 'index2.php';
$html = ob_get_clean();

$Html2Pdf->writeHTML($html);
$Html2Pdf->output("pdf_generado.pdf");





/*Ejemplo 1
//abre este archivo en el navegador para descargar el pdf
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$Html2Pdf = new Html2Pdf();

$html = "<h1>Hola mundo desde una librería de PHP</h1>";
$html .= "<p>Aprendiendo a usar esta librería</p>";

$Html2Pdf->writeHTML($html);
$Html2Pdf->output("pdf_generado.pdf");
*/