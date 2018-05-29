<?php

class pdf{
    
    public function generar(){
        
        include_once('conexion.php');
        require_once('../fpdf.php');

        $pdf = new FPDF;

        $pdf->AddPage('P', 'Letter', '0');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Write(5,"mama es bonita");
        $pdf->SetTitle('True', TRUE);
        $pdf->Image('../recibo.jpg', 0, 0, 100, 100, 'JPG');
        $pdf->output();
        return $pdf;
        
    } 
}



?>