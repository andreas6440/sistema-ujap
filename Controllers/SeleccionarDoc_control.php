<?php

function seleccionarDoc($doc,$max,$est){
    
    require("Models/ActualizarUser_model.php");
    $_SESSION['doc'] =  $doc;
    
    if($doc==1){
        
        $cont = 1;
        
        while($cont<=$max){
            
            if (isset($_REQUEST['1'.$cont])) {
                
                if($est==0){
                    $update = new ActualizarUser();
                    $update -> FechaVisto(array('fecha_v'=>date('Y-m-d')),$_POST['r'.$cont],1);
                }
                echo '<script>window.open("Views/PDF.php")</script>';
                //echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';

            }
            
            $cont = $cont + 1;
            
        }
          
    }elseif($doc==2){
        
        $cont = 1;
        
        while($cont<=$max){
            
            if (isset($_REQUEST['2'.$cont])) {
                
                if($est==0){
                    $update = new ActualizarUser();
                    $update -> FechaVisto(array('fecha_v'=>date('Y-m-d')),$_POST['r'.$cont],2);
                }
                echo '<script>window.open("Views/PDF.php")</script>';
                //echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';

            }
            
            $cont = $cont + 1;
            
        }
        
        
        
    }elseif($doc==3){
        
       echo '<script>window.open("Views/PDF.php")</script>';
        //echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';
        
    }elseif($doc==4){
        
        echo '<script>window.open("Views/PDF.php")</script>';
        //echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';
        
    }elseif($doc==5){
        
        $cont = 1;
        
        while($cont<=$max){
            
            if (isset($_REQUEST['5'.$cont])) {
            
                echo '<script>window.open("Views/PDF.php")</script>';
                //echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';

            }
            
            $cont = $cont + 1;
            
        }
        
    }elseif($doc==6){
        
        $cont = 1;
        
        while($cont<=$max){
            
            if (isset($_REQUEST['6'.$cont])) {
                
                if($est==0){
                    $update = new ActualizarUser();
                    $update -> FechaVisto(array('fecha_v'=>date('Y-m-d')),$_POST['r'.$cont],6);
                }
                echo '<script>window.open("Views/PDF.php")</script>';
                //echo '<meta http-equiv="Refresh" content="0;URL=Views/PDF.php">';

            }
            
            $cont = $cont + 1;
            
        }
        
    }elseif($doc==7){
        
        
        
    }

}

function seleccionarTipo(){
    
}

?>