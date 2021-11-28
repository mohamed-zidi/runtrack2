<?php
session_start();
$prenom =NULL;
if(isset($_POST['valider'])){
    $_SESSION[$prenom] = $_POST['prenom'];
    
}
if(isset($_POST['reset'])){
    $_SESSION[$prenom] = NULL;
}

var_dump ($_SESSION[$prenom]);
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
    <form action="" method="post">
        <input type="text" name="prenom" id="prenom">
        <input type="submit" value="valider" name="valider">
        <input type="submit" value="reset" name="reset">
    </form>

    
</body>
</html>