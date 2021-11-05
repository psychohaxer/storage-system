<?php
	session_start();

	include 'User.php';
	$user = new User();

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $user->check_login($username,$password);
		
	if (isset($_POST['remember'])) {
		setcookie('login','true', time()+60);
	}
?>