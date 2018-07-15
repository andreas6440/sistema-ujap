<?php
require_once("Models/ContadorPDF_model.php");

function SRecibos(){
    $drow = new bdoc;
    $row = $drow->recibos();
return $row;
}

function SRecibosO($inicio,$registros){
    $drow = new bdoc;
    $row = $drow->recibosO($inicio,$registros);
return $row;
}

function SRecibosM($num){
    $drow = new bdoc;
    $row = $drow->recibosM($num);
return $row;
}

function SARC(){
    $drow = new bdoc;
    $row = $drow->ARC();
return $row;
}

function SARCO($inicio,$registros){
    $drow = new bdoc;
    $row = $drow->ARCO($inicio,$registros);
return $row;
}

function SARCM($num){
    $drow = new bdoc;
    $row = $drow->ARCM($num);
return $row;
}

function SFideicomiso(){
    $drow = new bdoc;
    $row = $drow->fideicomiso();
return $row;
}

function SFideicomisoO($inicio,$registros){
    $drow = new bdoc;
    $row = $drow->fideicomisoO($inicio,$registros);
return $row;
}


?>