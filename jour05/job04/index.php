<?php
function calcule($a,$operation,$b) {
if($operation=='plus'){
    return $a + $b;
} elseif ($operation=='moins'){
    return $a -$b;
}elseif($operation=='fois'){
    return $a*$b;
} elseif($operation=='divisé par'){
    return $a / $b;
} elseif($operation=='modulo'){
    return $a % $b;
} else {
    echo "Erreur";
}

}
echo calcule(23,'modulo',4);
?>