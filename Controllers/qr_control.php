<?php

require_once('phpqrcode/qrlib.php'); 


function qr(){
    
    
    // how to save PNG codes to server 
     
    $tempDir = 'EXAMPLE_TMP_SERVERPATH'; 
     
    $codeContents = $_SESSION['id_doc'].' '; 
     
    // we need to generate filename somehow,  
    // with md5 or with database ID used to obtains $codeContents... 
    $fileName = '005_file_'.md5($codeContents).'.png'; 
     
    $pngAbsoluteFilePath = $tempDir.$fileName; 
    $_SESSION['qr'] = '../Views/EXAMPLE_TMP_SERVERPATH'.$fileName; 
     
    // generating 
    if (!file_exists($pngAbsoluteFilePath)) { 
        QRcode::png($codeContents, $pngAbsoluteFilePath); 
    }
    
}
     

?>