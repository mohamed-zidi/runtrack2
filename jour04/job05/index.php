<?php
    if ($_POST['username'] == "John" && $_POST['password'] == 'Rambo') {
        echo 'Ce n\'est pas ma guerre';
    } else{
        echo "Votre pire cauchemar";
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
    <form action="index.php" method="post">
        <p>
        <label for="username">Entrez votre nom</label>
        <input type="text" name="username" id="username">
        </p>
        
        <p>
        <label for="password">Entrez mot de passe</label>
        <input type="password" name="password" id="password">
        </p>
        
        <p>
        <input type="submit" value="Valider">
        </p>

    </form>
</body>
</html>