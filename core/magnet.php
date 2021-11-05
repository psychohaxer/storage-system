<?php
    session_start();

    if (isset($_SESSION["islogin"])){
        if ($_SESSION["islogin"] = false){
            header("homepage.php");
        }
        else if($_SESSION["islogin"] = true){
            if (isset($_SESSION["type"])){
                if($_SESSION["type"] == "admin"){
                    header("location:dashboard.php");
                }
                if($_SESSION["type"] == "user"){
                    header("location:dashboard.php");
                }
            }   
        }
    }
    
?>