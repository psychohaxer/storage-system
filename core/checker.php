<?php
    session_start();

    if(isset($_SESSION["type"])){
        if($_SESSION["type"] == "admin"){
            header("location:../dashboard.php");
        }
        if($_SESSION["type"] == "user"){
            header("location:../dashboard.php");
        }
    }
    else{
        header("../homepage.php");
    }
?>