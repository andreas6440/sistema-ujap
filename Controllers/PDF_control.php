<?php

require_once('Models/PDF_model.php');
require_once('fpdf.php');

class pdf{
    
    public function generarpdf($type){
        if($type==1){
            $drow = new dpdf;
            $row = $drow->buscarRecibo();

            $pdf = new FPDF;

            $pdf->AddPage('P', 'Letter', '0');
            $pdf->SetFont('Arial', '', 12);
            $pdf->SetTitle('Recibo', TRUE);
            $pdf->Image('Views/Assets/img/recibo.jpg', 0, 0, -300);

            //Periodo Desde
            $pdf->SetXY(103,57.5);
            $pdf->Write(5,"Hola mundo");

            //sm
            $pdf->SetXY(142,57.5);
            $pdf->Write(5,"Hola mundo");

             //sd
            $pdf->SetXY(180,57.5);
            $pdf->Write(5,"Hola mundo");

             //periodo hasta
            $pdf->SetXY(103,64);
            $pdf->Write(5,"Hola mundo");

            //1era q
            $pdf->SetXY(148,64);
            $pdf->Write(5,"Hola mundo");

            //num cta
            $pdf->SetXY(87,70);
            $pdf->Write(5,"Hola mundo");

            //2da q
            $pdf->SetXY(158,70.5);
            $pdf->Write(5,"Hola mundo");

            //Nombre
            $pdf->SetXY(33,81);
            $pdf->Write(5,$row['nombre']." ".$row['apellido']);

            //Cedula
            $pdf->SetXY(123,81);
            $pdf->Write(5,$row['ci']);

            //Ingreso
            $pdf->SetXY(175,80.5);
            $pdf->Write(5,$row['fecha_ingreso']);

            //Departamento
            $pdf->SetXY(45,87);
            $pdf->Write(5,$row['departamento']);

            //Dedicacion
            $pdf->SetXY(159,87);
            $pdf->Write(5,$row['dedicacion']);

            //Cargo
            $pdf->SetXY(28,95);
            $pdf->Write(5,$row['cargo']);

            //Categoria
            $pdf->SetXY(148,94.8);
            $pdf->Write(5,$row['categoria_nomina']);

            //total
            $pdf->SetXY(130,185);
            $pdf->Write(5,"Hola mundo");

            //total neto
            $pdf->SetXY(141,198);
            $pdf->Write(5,"Hola mundo");

            $pdf->output('I','Recibo');
            return $pdf;
        }  
    }
    
}



?>