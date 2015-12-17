<?php
    session_start();
    unset($_SESSION['username']);
    setcookie('filename','',time() - 3600,'/');
    session_destroy();

    echo 'YOU HAVE SUCCESSFULLY LOG OUT';
    header("location:welcome.php");
?>