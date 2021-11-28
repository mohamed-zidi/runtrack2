<?php
session_start();
$_SESSION['nbsisites'] = 0;
if($_SESSION['nbsisites']){
    $_SESSION['nbsisites']++;
} else{
    $_SESSION['nbsisites'] = 1 ;
}

if(isset($_POST['reset'])){
    $_SESSION['nbsisites'] = 0;
}
echo $_SESSION['nbsisites'];
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