<?php

$nb = 2;
while($nb <= 1000)
{
    $i = $nb - 1;
    while($i >= 0)
    {
        if($nb % $i == 0)
        {
            break;
        }
        $i--;
    }
    if($i == 1) echo "$nb <br>";
    $nb++;
}

?>




