<?php

require_once('../Controllers/PDF_control.php');

if($_SESSION['doc'] == 1){
   generarrecibo();
}elseif($_SESSION['doc'] == 2){
    generarARC();
}elseif($_SESSION['doc'] == 3){
    generarconstanciab();
}elseif($_SESSION['doc'] == 4){
    generarconstanciad();
}
?>