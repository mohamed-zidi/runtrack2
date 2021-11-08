<?php
function bonjour($jour) {
    if($jour=="jour") {
        echo "bonjour";
    } else {
        echo "bonsoir";
    }
}

bonjour("jour");
bonjour($jour);
?>