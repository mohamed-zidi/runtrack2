<?php
setcookie('prenom',$_POST['prenom'],time()+60*60*24);
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
    <?php if(!isset($_POST['prenom']) || isset($_POST['deco'])){  ?>
    <form action="" method="post">
    <input type="text" name="prenom" id="prenom">
    <input type="submit" value="valider" name="valider">
    </form>
    

    <?php } elseif (isset($_COOKIE['prenom'])){?>
    <p>
        Bonjour <?php echo $_COOKIE['prenom']; ?>
        <form action="" method="post">
            <input type="submit" value="deco" name="deco">
        </form>
    </p>
    <?php } ?>
</body>
</html>