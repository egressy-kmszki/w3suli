<?php

 $OldalCikk               = array();
 $OldalCikk['id']         = 0;
 $OldalCikk['Oid']        = 0; 
 $OldalCikk['Cid']        = 0; 
 $OldalCikk['CPrioritas'] = 0; 
 


function getCikkekHTML() {
    $HTMLkod  = '';
    
    // Egyenlőre az összes, az oldalhoz tartozó cikket megjelenítjük, később lapozunk
    //...
    
    
    
    $HTMLkod  .= getCikkekForm();
    
    //....
    return $HTMLkod;
}


function getCikkekForm() {
  $HTMLkod  = '';    
  // Új cikk és
  // a $_SESSION['SzerkCik'][id] és a $_SESSION['SzerkCik'][Oid] által meghatározott cikk kezelése 
  $HTMLkod  = getUjCikkForm;
  $HTMLkod  = getCikkForm();
  $HTMLkod  = getCikkTorolForm();
  //...
  
  
  return $HTMLkod;
}


    function setCikkekLista($Oid) {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }



?>
