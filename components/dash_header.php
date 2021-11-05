<?php
    include "core/bouncer.php";
    // session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Storage System Dashboard </title>
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
            <a href="#">
                <li>&#9731; Account </li>
            </a>
                <li>&#10063; Storage Data
                    <ul>
                        <a href="entry.php"><li>  &#9998; New Items </li></a>
                    </ul>
                    <ul>
                        <a href="items.php"><li>  &#9776; Item List </li></a>
                    </ul>
                </li>
                <li>&#8646; Item Transaction
                    
                    <ul>
                        <a href="add.php"><li>  &#8599; Add Quantity </li></a>
                    </ul>
					<ul>
                        <a href="substract.php"><li>  &#8600; Substract Quantity </li></a>
                    </ul>
                </li>
                <a href="core/logout.php">
                <li> &#9749; Logout </li></a>
            </a>
            </ul>
        </nav>