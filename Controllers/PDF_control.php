<?php

session_start();
require_once('../Models/PDF_model.php');//recordar quitar el ../
require_once('../tfpdf.php');

 function generarrecibo(){
        $drow = new dpdf;
        $row = $drow->perfil();
        $row2 = $drow->buscarRecibo();

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
        $pdf->Write(5,round($row['sueldo_base']));

         //sd
        $pdf->SetXY(181,57.5);
        $pdf->Write(5,round($row['sueldo_base']/30));

         //periodo hasta
        $pdf->SetXY(103,64);
        $pdf->Write(5,"Hola mundo");

        //1era q
        $pdf->SetXY(148,64);
        $pdf->Write(5,round($row['sueldo_base']/2));

        //num nomina
        $pdf->SetXY(87,70);
        $pdf->Write(5,$_SESSION['id_doc']);

        //2da q
        $pdf->SetXY(158,70.5);
        $pdf->Write(5,round($row['sueldo_base']/2));

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
        $pdf->Write(5, $drow->departamento());

        //Dedicacion
        $pdf->SetXY(159,87);
        $pdf->Write(5,$row['dedicacion']);

        //Cargo
        $pdf->SetXY(29,95);
        $pdf->Write(5,$row['cargo']);

        //Categoria
        $pdf->SetXY(149,94.6);
        $pdf->Write(5,$drow->escalafon());

        //Conceptos
        $pdf->SetXY(10,110);
        $conceptos = json_decode($row2,true);

        $total=0;
        foreach ($conceptos as $concepto => $valor) {
            
            $pdf->Cell(68,6,$concepto,0,0,'L');
            $pdf->Cell(32,6,'',0,0,'C');
            if(strpos($concepto,'Ret')){
                $pdf->Cell(34,6,'',0,0,'C');
                $pdf->Cell(34,6,$valor,0,0,'C');
                $total=$total-$valor;
            }else{
                $pdf->Cell(34,6,$valor,0,0,'C');
                $pdf->Cell(34,6,'',0,0,'C');
                $total=$total+$valor;
            }
            $pdf->Cell(32,6,'',0,1,'C');
            
            
        }
     
        //total
        $pdf->SetXY(131,185);
        $pdf->Write(5,$total);

        //total neto
        $pdf->SetXY(142,197.8);
        $pdf->Write(5,$total);

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
            $pdf->MultiCell(150,10,"Por medio de la presente se hace constar que el Sr ".$row['nombre']." ".$row['apellido'].", Titular de la cédula de identidad Nro ".$row['ci']." trabajó en la institución como ".$row['cargo'].", en su escalafon ".$drow->escalafon().", desde ".$row['fecha_ingreso']." hasta ".$row['fecha_salida']. ". \n \nConstancia que se expide a la solicitud de la parte en San Diego, a los veinte dias de ".date('Y-m-d'));
        }else{
           $pdf->MultiCell(150,10,"Por medio de la presente se hace constar que la Sra ".$row['nombre']." ".$row['apellido'].", Titular de la cédula de identidad Nro ".$row['ci']." trabajó en la institución como ".$row['cargo'].", en su escalafon ".$drow->escalafon().", desde ".$row['fecha_ingreso']." hasta ".$row['fecha_salida']. ". \n \nConstancia que se expide a la solicitud de la parte en San Diego, a los veinte dias de ".date('Y-m-d'));
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
    $row = $drow->perfil();
    $row2 = $drow->buscarARC();
    
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
        $pdf->SetXY(46,104);
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

        $cont=1;
        $total=0;
        $trem=0;
        $timp=0;
    
    while ($row3 = pg_fetch_row($row2)) {
        $array1 = json_decode($row3[0]);
        $array2 = json_decode($row3[1]);
        $array2 = json_decode(json_encode($array2), True);
    }
     foreach ($array1 as $mes => $valor) {
         $pdf->SetX(20);
            if($cont==1){
                $pdf->Cell(36,6,'Enero',1,0);
            }elseif($cont==2){
                $pdf->Cell(36,6,'Febrero',1,0);
            }elseif($cont==3){
                $pdf->Cell(36,6,'Marzo',1,0);
            }elseif($cont==4){
                $pdf->Cell(36,6,'Abril',1,0);
            }elseif($cont==5){
                $pdf->Cell(36,6,'Mayo',1,0);
            }elseif($cont==6){
                $pdf->Cell(36,6,'Junio',1,0);
            }elseif($cont==7){
                $pdf->Cell(36,6,'Julio',1,0);
            }elseif($cont==8){
                $pdf->Cell(36,6,'Agosto',1,0);
            }elseif($cont==9){
                $pdf->Cell(36,6,'Septiembre',1,0);
            }elseif($cont==10){
                $pdf->Cell(36,6,'octubre',1,0);
            }elseif($cont==11){
                $pdf->Cell(36,6,'Noviembre',1,0);
            }elseif($cont==12){
                $pdf->Cell(36,6,'Diciembre',1,0);
            }
            $pdf->Cell(36,6,$valor,1,0);
            $trem=$trem+$valor;
            $pdf->Cell(36,6,$trem,1,0);
            $timp=$timp+$valor;
            $pdf->Cell(36,6,$array2[$mes],1,0);
            $pdf->Cell(36,6,$timp,1,1);
            $total=$total+$valor-$array2[$mes];
            $cont=$cont+1;
        }
        
    //total 1
        $pdf->SetXY(98,226);
        $pdf->Write(5,$trem);
    
    //total 2
        $pdf->SetXY(170,226);
        $pdf->Write(5,$timp);
        
        
    
    $pdf->output();
    
    return $pdf;
    
    
}

function generarfideicomiso(){
    
    $drow = new dpdf;
    $row = $drow->buscarFideicomiso();
    $row2 = $drow->buscarUserFideicomiso();

    
    $pdf = new tFPDF;

        $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
        $pdf->SetFont('DejaVu','',12);
        $pdf->SetTitle('Fideicomiso', TRUE);
    
        $band = 0;
        $cont = 0;
        $cont3 = 0;
        
        while ($row3 = pg_fetch_array($row2)) {
            $cont3=$cont3+1;
        }
    
        //$cont3=40;//ejemplo
    
        while ($band == 0){
            
            $row2 = $drow->buscarUserFideicomiso();
            
            $pdf->AddPage('L', 'Letter', '0');
            $pdf->Image('../Views/Assets/img/fideicomiso.jpg', 0, 0, -300);

            //banco
            $pdf->SetXY(108,55);
            $pdf->Write(5,$row['banco']);

            //utilidades
            $pdf->SetXY(260,39);
            $pdf->Write(5,$row['d_utilidades']);

            //alicuota
            $pdf->SetXY(240,45.5);
            $pdf->Write(5,$row['alicuota']);

            //periodo
            $pdf->SetXY(240,52);
            $pdf->Write(5,$row['periodo']);


            $pdf->SetFont('DejaVu','',11);

            $pdf->SetY(70);
            $pdf->SetX(0);
            $pdf->MultiCell(6,5,'N'. "\n ",1,'C');
            $pdf->SetY(70);
            $pdf->SetX(6);
            $pdf->MultiCell(25,5,'Cedula '. "\n ",1,'C');
            $pdf->SetY(70);
            $pdf->SetX(31);
            $pdf->MultiCell(39,5,'Nombre '. "\n ",1,'C');
            $pdf->SetY(70);
            $pdf->SetX(70);
            $pdf->MultiCell(25,5,'Sueldo '."\n".'Mensual ',1,'C');
            $pdf->SetY(70);
            $pdf->SetX(95);
            $pdf->MultiCell(25,5,'Sueldo '."\n".'Normal ',1,'C'); 
            $pdf->SetY(70);
            $pdf->SetX(120);
            $pdf->MultiCell(20,5,'Sueldo '."\n".'Diario ',1,'C'); 
            $pdf->SetY(70);
            $pdf->SetX(140);
            $pdf->MultiCell(20,5,'Alicuota '."\n".'B. Vac ',1,'C'); 
            $pdf->SetY(70);
            $pdf->SetX(160);
            $pdf->MultiCell(15,5,'Dias '."\n".' ',1,'C'); 
            $pdf->SetY(70);
            $pdf->SetX(175);
            $pdf->MultiCell(30,5,'Antig '."\n".'Prest ',1,'C'); 
            $pdf->SetY(70);
            $pdf->SetX(205);
            $pdf->MultiCell(15,5,'Dias '."\n".'Adic',1,'C'); 
            $pdf->SetY(70);
            $pdf->SetX(220);
            $pdf->MultiCell(30,5,'Antig '."\n".'Prest. Adic ',1,'C'); 
            $pdf->SetY(70);
            $pdf->SetX(250);
            $pdf->MultiCell(30,5,'Total '."\n".'Prest ',1,'C');

            $pdf->SetFont('DejaVu','',10);            
            $cont2 = 0;
            $cont4 = 0;

            while ($row3 = pg_fetch_array($row2)) {
                
                //while($cont4<40){
                if(($cont2<20)and($cont==$cont4)){
                    $cont = $cont + 1;
                    $cont2 = $cont2 + 1;

                    $pdf->SetX(0);
                    $pdf->Cell(6,5,$cont,1,0);

                    $row4 = $drow->perfil2($row3['id_user']);

                    $pdf->Cell(25,5,$row4['ci'],1,0);
                    $pdf->Cell(39,5,$row4['nombre']." ".$row4['apellido'],1,0);
                    $pdf->Cell(25,5,$row3['sueldo_mensual'],1,0);
                    $pdf->Cell(25,5,$row3['sueldo_normal'],1,0);
                    $pdf->Cell(20,5,$row3['sueldo_diario'],1,0);
                    $pdf->Cell(20,5,$row3['alicuota'],1,0);
                    $pdf->Cell(15,5,$row3['dias'],1,0);
                    $pdf->Cell(30,5,$row3['ant_prest'],1,0);
                    $pdf->Cell(15,5,$row3['dias_ad'],1,0);
                    $pdf->Cell(30,5,$row3['ant_prest_ad'],1,0);
                    $pdf->Cell(30,5,$row3['ant_prest']+$row3['ant_prest_ad'],1,1);

                }
                
                $cont4 = $cont4 + 1;
                    
                //}
                
                
            }
    
            
            if($cont>=$cont3){
                $band = 1;
            }
        }
        
        
    
    $pdf->output();
    
    return $pdf;
    
    
}

function generarbono(){
        $drow = new dpdf;
        $row = $drow->perfil();
        $row2 = $drow->buscarBono();

        $pdf = new tFPDF;

        $pdf->AddPage('P', 'Letter', '0');
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTitle('Bono Alimenticio', TRUE);
        $pdf->Image('../Views/Assets/img/bonoalimenticio.jpg', 0, 0, -300);

        //Periodo Hasta
        $pdf->SetXY(176,63.5);
        $pdf->Write(5,"Hola mundo");

         //periodo Desde
        $pdf->SetXY(104,64);
        $pdf->Write(5,"Hola mundo");

        //num cta
        $pdf->SetXY(96,71);
        $pdf->Write(5,$_SESSION['id_doc']);

        //Nombre
        $pdf->SetXY(34,78);
        $pdf->Write(5,$row['nombre']." ".$row['apellido']);

        //Cedula
        $pdf->SetXY(124,78);
        $pdf->Write(5,$row['ci']);

        //Ingreso
        $pdf->SetXY(176,78);
        $pdf->Write(5,$row['fecha_ingreso']);

        //Departamento
        $pdf->SetXY(45,84.3);
        $pdf->Write(5,$drow->departamento());

        //Dedicacion
        $pdf->SetXY(159,84);
        $pdf->Write(5,$row['dedicacion']);

        //Cargo
        $pdf->SetXY(30,92);
        $pdf->Write(5,$row['cargo']);

        //Categoria
        $pdf->SetXY(149,92);
        $pdf->Write(5,$drow->escalafon());

        $pdf->SetXY(10,110);

            
            $pdf->Cell(68,6,'Bono Alimenticio',0,0,'L');
            $pdf->Cell(32,6,'',0,0,'C');
            $pdf->Cell(34,6,$row2,0,0,'C');
            $pdf->Cell(34,6,'',0,0,'C');
            $total=$row2;
            $pdf->Cell(32,6,'',0,1,'C');
    
        //total
        $pdf->SetXY(105,182);
        $pdf->Write(5,$total);

        //total neto
        $pdf->SetXY(141,198);
        $pdf->Write(5,$total);

        $pdf->output();
        return $pdf;
}





?>