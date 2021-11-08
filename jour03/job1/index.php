<?php
$tab_valeurs = [200,98,459,404,173,171,204];

foreach($tab_valeurs as $valeurs) {

        if($valeurs%2 == 1) {

                echo $valeurs .' '.'est impaire </br>';

        }else {
                
                echo $valeurs .' '. 'est paire </br>';
        }
}
?>

