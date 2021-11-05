<?php
    // include "core/magnet.php";
    session_start();
    $_SESSION["islogin"] = false;
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Storage System Homepage</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/home.css">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <style ="text/css">
            body {
                background-image:url("img/bg.png");
                background-repeat:no-repeat;
                background-position:center;
                background-attachment:fixed;
                background-size:100%;
            }
        </style>
    </head>
    <body>
        <nav id="header">
            <ul id="navbar">
                <a href="homepage.php"> <li>&#10063; Storage System</li> </a>   
                <a href="login.php"> <li>&#9749; Login</li> </a>
                <a href="help.php"><li> &#10067; Help </li></a>
                <a href="about.php"><li> &#9734; About </li></a>
            </ul>
        </nav>