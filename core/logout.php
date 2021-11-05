<?php
    include 'User.php';

    $user= new user();
    $user->logout();

    setcookie('login','',time()-3600);
    header("location:../homepage.php");
?>