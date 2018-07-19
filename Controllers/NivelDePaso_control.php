<?php

function nivel1(){
    
    if($_SESSION['nivel']==1){
        $_SESSION['rut']='Perfil';
        echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
    }
    
}

function nivel2(){
    
    if(($_SESSION['nivel']==1)or($_SESSION['nivel']==2)){
        $_SESSION['rut']='Perfil';
        echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
    }
    
}

?>