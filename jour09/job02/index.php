<?php

$bdd = mysqli_connect("localhost","root","","jour08");

$req = mysqli_query($bdd,"SELECT nom, capacite FROM salles");

// $req1 = mysqli_query($bdd,"SELECT*");

$res = mysqli_fetch_all($req);

// $req2 = mysqli_query($bdd,"INSERT INTO etudiants (prenom,nom,naissance,email sexe) VALUES ('test','test','test')");

// var_dump($res);
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class = table>
        <h2>Salles et leur capacité</h2>
        <thead>
                        <th>1</th> 
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                         
        </thead>

        <tbody>    
            <tr>
                        
                        <?php foreach($res as $key => $value){
                                    echo '<td>';
                        
                                foreach($value as $key2=>$value2){
                                    echo $value2. '<br/>';
                            }
                                    echo '</td>';
                        }

                        ?>
                
            </tr>
        
            
        </tbody>
</table>
    
<style>
    .table{
        border: black 2px solid;
        border-collapse: collapse;
    }
    th{
        border: black 2px solid;
        border-collapse:collapse;
    }
    td{
        border: black 2px solid;
        border-collapse: collapse;
    }
</style>

    
</body>
</html>