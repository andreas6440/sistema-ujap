<?php

require_once "Models/Firma_model.php";

function firma(){
    $firma = buscarFirma();
    return $firma;
}

?>