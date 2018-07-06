<?php
require_once("../Models/ContadorPDF_model.php");

function SRecibos(){
    $drow = new bdoc;
    $row = $drow->recibos();
return $row;
}

function SARC(){
    $drow = new bdoc;
    $row = $drow->ARC();
return $row;
}

?>