<?php

session_start();

require_once('../Models/PDF_model.php');
require_once('../fpdf.php');


$pdf = new pdf;

$pdf->generar();



?>