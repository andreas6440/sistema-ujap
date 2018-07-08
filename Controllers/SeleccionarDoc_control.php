<?php

function seleccionarDoc($doc,$max){
    
    require("Models/ActualizarUser_model.php");
    $_SESSION['doc'] =  $doc;
    
    if($doc==1){
        
        $cont = 1;
        
        while($cont<=$max){
            
            if (isset($_REQUEST[''.$cont])) {
            
                $update = new ActualizarUser();
                $update -> FechaVisto(array('fecha_v'=>date('Y-m-d')),$_POST['r'.$cont]);
                echo '<meta http-equiv="Refresh" content="5;URL=Views/PDF.php">';

            }
            
            $cont = $cont + 1;
            
        }
          
        
    }elseif($doc==2){
        
        
        
    }elseif($doc==3){
        
        
        
    }elseif($doc==4){
        
        
        
    }elseif($doc==5){
        
        
        
    }elseif($doc==6){
        
        
        
    }elseif($doc==7){
        
        
        
    }

}

?>