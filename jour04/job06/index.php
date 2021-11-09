<?php
    if($_GET[nombre]%2 == 0) {
        echo 'Nombre pair';
    }else{
        echo 'Nombre impair';
    }
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
    <form action="index.php" method="get">
        <p>
        <label for="nombre">Entrez une Valeur</label>
        <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <input type="submit" value="Valider">
        </p>
    </form>
</body>
</html>