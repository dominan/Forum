<?php
	session_start();
	
	include ('dbconn.php');
	
	$username = $_POST['usernameinput'];
	$password = $_POST['passwordinput'];
	
	$result = mysqli_query($con, "SELECT username, password FROM users WHERE username = '".$username."' AND password = '".$password."'");
	
	if (mysqli_num_rows($result) != 0) {
		$_SESSION['username'] = $username;
		header("Location: "."/forum/home.php");
	} else {
			if(substr($_SERVER['HTTP_REFERER'], -10)=="login_fail")
				header("Location: ".$_SERVER['HTTP_REFERER']);
			else
			header("Location: ".$_SERVER['HTTP_REFERER']."?status=login_fail");
		
	}
?>