<?php

session_start();
require_once('../Models/PDF_model.php');//recordar quitar el ../
require_once('../tfpdf.php');

 function generarrecibo(){
        $drow = new dpdf;
        $row = $drow->perfil();

        $pdf = new tFPDF;

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

        $pdf->output();
        return $pdf;
}

function generarconstanciab(){
        $drow = new dpdf;
        $row = $drow->buscarConstanciab();

        $pdf = new tFPDF;

        $pdf->AddPage('P', 'Letter', '0');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->SetTitle('Constancia Simple', TRUE);
        $pdf->Image('../Views/Assets/img/constanciab.jpg', 0, 0, -300);
        
        
        //Titulo
        $pdf->SetXY(95,65);
        $pdf->Write(5,"Constancia");
    
        //$pdf->SetFont('Arial', '', 12);
        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',12);
    
        //Contenido
        $pdf->SetXY(35,85);
        if($row['genero']==1){
            $pdf->MultiCell(150,10,"Por medio de la presente se hace constar que el Sr ".$row['nombre']." ".$row['apellido'].", Titular de la cédula de identidad Nro ".$row['ci']." trabajó en la institución como ".$row['cargo'].", en su escalafon ".$row['id_escalafon'].", desde ".$row['fecha_ingreso']." hasta ".$row['fecha_salida']. ". \n \nConstancia que se expide a la solicitud de la parte en San Diego, a los veinte dias de ".date('Y-m-d'));
        }else{
           $pdf->MultiCell(150,10,"Por medio de la presente se hace constar que la Sra ".$row['nombre']." ".$row['apellido'].", Titular de la cédula de identidad Nro ".$row['ci']." trabajó en la institución como ".$row['cargo'].", en su escalafon ".$row['id_escalafon'].", desde ".$row['fecha_ingreso']." hasta ".$row['fecha_salida']. ". \n \nConstancia que se expide a la solicitud de la parte en San Diego, a los veinte dias de ".date('Y-m-d'));
        }
    
        $pdf->output();
        
        return $pdf;
}

function generarconstanciad(){
        $drow = new dpdf;
    
        $materias = $drow->buscarConstanciad();
        $row = $drow->perfil();

        $pdf = new tFPDF;

        $pdf->AddPage('P', 'Letter', '0');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->SetTitle('Constancia Detallada', TRUE);
        $pdf->Image('../Views/Assets/img/constanciab.jpg', 0, 0, -300);
        
        
        //Titulo
        $pdf->SetXY(95,65);
        $pdf->Write(5,"Constancia");
    
        //$pdf->SetFont('Arial', '', 12);
        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',12);
    
        //Contenido
        $pdf->SetXY(35,85);
        if($row['genero']==1){
            $pdf->MultiCell(150,10,"Por medio de la presente se hace constar que el Sr ".$row['nombre']." ".$row['apellido'].", Titular de la cédula de identidad Nro ".$row['ci']." trabajó en la institución con el siguente resumen laboral:");
        }else{
           $pdf->MultiCell(150,10,"Por medio de la presente se hace constar que la Sra ".$row['nombre']." ".$row['apellido'].", Titular de la cédula de identidad Nro ".$row['ci']." trabajó en la institución con el siguente resumen laboral:");
        } 
    
        $band1="0000-00-00";
        $band2="0000-00-00";
        
        while($row2 = pg_fetch_array($materias)){
            if(($row2['fecha_inicio']==$band1)and($row2['fecha_final']==$band2)){
                $pdf->SetX(35);
                $pdf->Cell(150,10,'--> '.$row2['materia'],1,1,'C');
            }else{
                $pdf->SetX(35);
                $pdf->Cell(40,10,'Periodo: '.$row2['periodo'],1,0);
                $pdf->Cell(55,10,'Fecha Inicio: '.$row2['fecha_inicio'],1,0);
                $pdf->Cell(55,10,'Fecha Final: '.$row2['fecha_final'],1,1);
                $pdf->SetX(35);
                $pdf->Cell(150,10,'--> '.$row2['materia'],1,1,'C');
            }
            $band1=$row2['fecha_inicio'];
            $band2=$row2['fecha_final'];
        }
    
        
    
        $pdf->output();
        
        return $pdf;
}

function generarARC(){
    
    $drow = new dpdf;
    $row = $drow->buscarARC();
    
    $pdf = new tFPDF;

        $pdf->AddPage('P', 'Letter', '0');
        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',12);
        $pdf->SetTitle('ARC', TRUE);
        $pdf->Image('../Views/Assets/img/ARC.jpg', 0, 0, -300);
    
    //Nombre
        $pdf->SetXY(50,91);
        $pdf->Write(5,$row['nombre']." ".$row['apellido']);

    //Cedula
        $pdf->SetXY(48,97.5);
        $pdf->Write(5,$row['ci']);
    
    //Cargo
        $pdf->SetXY(45,104);
        $pdf->Write(5,$row['cargo']);
    
        $pdf->SetFont('DejaVu','',11);
    
        $pdf->SetY(120);
        $pdf->SetX(20);
        $pdf->MultiCell(36,5,'Fecha de Pago: '. "\n \n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(56);
        $pdf->MultiCell(36,5,'Remuneraciones: '. "\n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(92);
        $pdf->MultiCell(36,5,'Remuneraciones Acumuladas: '. "\n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(128);
        $pdf->MultiCell(36,5,'Impuesto Retenido: '. "\n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(164);
        $pdf->MultiCell(36,5,'Impuesto Retenido Acumulado: ',1,'C');
    
        $x=0;
        while($x<12){
            $pdf->SetX(20);
            $pdf->Cell(36,6,'fecha',1,0);
            $pdf->Cell(36,6,'money',1,0);
            $pdf->Cell(36,6,'money',1,0);
            $pdf->Cell(36,6,'money',1,0);
            $pdf->Cell(36,6,'money',1,1); 
            $x++;
        }
        
    
    $pdf->output();
    
    return $pdf;
    
    
}

function generarfideicomiso(){
    
    $drow = new dpdf;
    $row = $drow->buscarARC();
    
    $pdf = new tFPDF;

        $pdf->AddPage('P', 'Letter', '0');
        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',12);
        $pdf->SetTitle('ARC', TRUE);
        $pdf->Image('../Views/Assets/img/ARC.jpg', 0, 0, -300);
    
    //Nombre
        $pdf->SetXY(50,91);
        $pdf->Write(5,$row['nombre']." ".$row['apellido']);

    //Cedula
        $pdf->SetXY(48,97.5);
        $pdf->Write(5,$row['ci']);
    
    //Cargo
        $pdf->SetXY(45,104);
        $pdf->Write(5,$row['cargo']);
    
        $pdf->SetFont('DejaVu','',11);
    
        $pdf->SetY(120);
        $pdf->SetX(20);
        $pdf->MultiCell(36,5,'Fecha de Pago: '. "\n \n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(56);
        $pdf->MultiCell(36,5,'Remuneraciones: '. "\n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(92);
        $pdf->MultiCell(36,5,'Remuneraciones Acumuladas: '. "\n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(128);
        $pdf->MultiCell(36,5,'Impuesto Retenido: '. "\n ",1,'C');
        $pdf->SetY(120);
        $pdf->SetX(164);
        $pdf->MultiCell(36,5,'Impuesto Retenido Acumulado: ',1,'C');
    
        $x=0;
        while($x<12){
            $pdf->SetX(20);
            $pdf->Cell(36,6,'fecha',1,0);
            $pdf->Cell(36,6,'money',1,0);
            $pdf->Cell(36,6,'money',1,0);
            $pdf->Cell(36,6,'money',1,0);
            $pdf->Cell(36,6,'money',1,1); 
            $x++;
        }
        
    
    $pdf->output();
    
    return $pdf;
    
    
}





?>