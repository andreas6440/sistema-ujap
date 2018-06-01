<?php


class pdf{
    
    public function generar(){
    
        require_once('../fpdf.php');

        $pdf = new FPDF;

        $pdf->AddPage('P', 'Letter', '0');
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTitle('Recibo', TRUE);
        $pdf->Image('../Views/Assets/img/recibo.jpg', 0, 0, -300);
        
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
        $pdf->Write(5,pg_fetch_assoc(seleccionar())['nombre']." ".pg_fetch_assoc(seleccionar())['apellido']);
        
        //Cedula
        $pdf->SetXY(123,81);
        $pdf->Write(5,pg_fetch_assoc(seleccionar())['ci']);
        
        //Ingreso
        $pdf->SetXY(175,80.5);
        $pdf->Write(5,pg_fetch_assoc(seleccionar())['fecha_ingreso']);
        
        //Departamento
        $pdf->SetXY(45,87);
        $pdf->Write(5,pg_fetch_assoc(seleccionar())['departamento']);
        
        //Dedicacion
        $pdf->SetXY(159,87);
        $pdf->Write(5,pg_fetch_assoc(seleccionar())['dedicacion']);
        
        //Cargo
        $pdf->SetXY(28,95);
        $pdf->Write(5,pg_fetch_assoc(seleccionar())['cargo']);
        
        //Categoria
        $pdf->SetXY(148,94.8);
        $pdf->Write(5,pg_fetch_assoc(seleccionar())['categoria_nomina']);
        
        //total
        $pdf->SetXY(130,185);
        $pdf->Write(5,"Hola mundo");
        
        //total neto
        $pdf->SetXY(141,198);
        $pdf->Write(5,"Hola mundo");
            
        $pdf->output();
        return $pdf;
        
    } 
    
}

 function seleccionar(){
     include('conexion.php');
     
        $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($_SESSION['user']));
        $query = "SELECT * FROM public.".'"Personal"'." where ci = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['cedula']));
        return $select;
     
    }



?>