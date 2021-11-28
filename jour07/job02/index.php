<?php
setcookie('nbvisites',0,time() + 60*60*24);

if(isset($_COOKIE['nbvisites'])){
    $_COOKIE['nbvisites'] ++;
} 

if(isset($_POST['reset'])){
$_COOKIE['nbvisites'] = 1;
}

echo $_COOKIE['nbvisites'];
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
        <input type="submit" value="reset" name="reset">
    </form>
</body>
</html>