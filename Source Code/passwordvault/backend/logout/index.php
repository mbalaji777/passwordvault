<?php 	
	//to make sure it is in the same session
	session_start();
	error_log("User ".$_SESSION['username']."signed out at".time()." \n ", 3, "../log/error-log.log");
	$_SESSION['username'] = "";
	$_SESSION['id'] = "";

	session_destroy();

	header("Location: ../../login/");
 ?>