<?php 
	
	//establishing a connection to the server
	include '../connection/index.php';

	//creating local PHP variables
	$name = "";
	$username = "";
	$email = "";
	$phonenumber = "";
	$password = "";

	//if the user clicks submit, obtain the values from the form and store it in local PHP variables. 
	if(isset($_POST["submit"])) {
		$name = $_POST["inlineFormInputGroupName"];
		$username = $_POST["inlineFormInputGroupUsername"];
		$email = $_POST["inlineFormInputGroupEmail"];
		$phonenumber = $_POST["inlineFormInputGroupPhoneNumber"];
		$password = $_POST["inlineFormInputGroupPassword"];
	}

	//SQL Query Parameterization
	$query_register_prepared = $connection->prepare("INSERT INTO accounts (id, name, username, email, phonenumber, password) VALUES (NULL, ?, ?, ?, ?, ?)");

	$hashed_password = password_hash($password, PASSWORD_ARGON2I);

	//Binding the parameters 
	$query_register_prepared->bind_param("sssds", $name, $username, $email, $phonenumber, $hashed_password);

	//executing the statement
	$query_register_prepared->execute();

	if ($query_register_prepared->affected_rows == 1) {
		$message = "Registration Successful, Login to proceed to the Dashboard";
		header("Location: ../../login/index.php?error=$message");
	}







	// //SQL Query
	// $sql_query = "INSERT INTO accounts (id, name, username, email, phonenumber, password) VALUES ('','".$name."','".$username."','". $email ."','". $phonenumber ."','". $password ."')";
	// $result = $connection->query($sql_query);

	// if($result == TRUE) {
	// 	echo "successful";
	// }

	// else {
	// 	echo "not successful";
	// }


 ?>