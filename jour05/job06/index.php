<?php
function leetspeak($str){
    for($i=0;isset($str[$i]);$i++){
        if ($str[$i]== 'a' || $str[$i] =='A' ){
           echo 4; 

        } elseif($str[$i]=='b' || $str[$i] =='B'){
            echo 8;

        } elseif($str[$i]=='e' || $str[$i]=='E'){
            echo 3;

        } elseif($str[$i]=='g' || $str[$i]=='G'){
            echo 6;

        }elseif($str[$i]=='l' || $str[$i]=='L'){
            echo 1;

        }elseif($str[$i]=='s' || $str[$i]=='S'){
            echo 5;

        }elseif($str[$i]=='t' || $str[$i]=='T'){
            echo 7;

        } else {
            echo $str[$i];
        }
    } 
}

leetspeak('forward always');
?>