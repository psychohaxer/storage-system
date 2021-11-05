<?php
    session_start();
    if (!isset($_SESSION['islogin'])){
        header("homepage.php");
    }
?>