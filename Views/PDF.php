<?php

require_once('../Controllers/PDF_control.php');
require_once('../Controllers/qr_control.php');

if($_SESSION['doc'] == 1){
    qr();
   generarrecibo();
}elseif($_SESSION['doc'] == 2){
    generarARC();
}elseif($_SESSION['doc'] == 3){
    generarconstanciab();
}elseif($_SESSION['doc'] == 4){
    generarconstanciad();
}elseif($_SESSION['doc'] == 5){
    generarfideicomiso();
}elseif($_SESSION['doc'] == 6){
    generarbono();
}
?>