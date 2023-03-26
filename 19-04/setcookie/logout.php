<?php 
    session_start();
    setcookie('username', "", time() - 3600);
    unset($_SESSION['username']);

    header('Location: login.php');


?>