<?php
    session_start();

    if(isset($_SESSION['userBBApp'])){
        $username = $_SESSION['userBBApp'];
    }else{
        $username = "No has iniciado sesion";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('components/headerDoc.php');?>
    <title>BoomBang - Home</title>
</head>
<body>
    <?php
        print($username);
    ?>
</body>
</html>