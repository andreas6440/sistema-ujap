<?php
require_once("Models/ContadorPDF_model.php");

function SRecibos($user){
    $drow = new bdoc;
    $row = $drow->recibos($user);
return $row;
}

function SRecibosO($inicio,$registros,$user){
    $drow = new bdoc;
    $row = $drow->recibosO($inicio,$registros,$user);
return $row;
}

function SRecibosM($num,$user){
    $drow = new bdoc;
    $row = $drow->recibosM($num,$user);
return $row;
}

function SBonos($user){
    $drow = new bdoc;
    $row = $drow->bonos($user);
return $row;
}

function SBonosO($inicio,$registros,$user){
    $drow = new bdoc;
    $row = $drow->bonosO($inicio,$registros,$user);
return $row;
}

function SBonosM($num,$user){
    $drow = new bdoc;
    $row = $drow->bonosM($num,$user);
return $row;
}

function SARC($user){
    $drow = new bdoc;
    $row = $drow->ARC($user);
return $row;
}

function SARCO($inicio,$registros,$user){
    $drow = new bdoc;
    $row = $drow->ARCO($inicio,$registros,$user);
return $row;
}

function SARCM($num,$user){
    $drow = new bdoc;
    $row = $drow->ARCM($num,$user);
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