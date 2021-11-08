<?php

function occurrences($str,$char){

$resultat=0;

 for($i=0;isset($str[$i]);$i++){
     
         if ($str[$i]== $char){

             $resultat++ ;
         }
     }
     return $resultat;
    
    }

    


?>