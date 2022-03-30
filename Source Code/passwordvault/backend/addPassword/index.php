<?php 	
	include_once '../connection/index.php';
	session_start();

	$primary_username = $_SESSION["username"];

	//creating local PHP variables
	$websitename = "";
	$username = "";
	$email = "";
	$password = "";

	//if the user clicks submit, obtain the values from the form and store it in local PHP variables. 
	if(isset($_POST["submit"])) {
		$websitename = $_POST["inlineFormInputGroupWebsiteName"];
		$username = $_POST["inlineFormInputGroupUsername"];
		$email = $_POST["inlineFormInputGroupEmail"];
		$password = $_POST["inlineFormInputGroupPassword"];
	}
	
	//retrieve the ID of the primary username
	//query string
	$primary_username_query = "SELECT id FROM accounts where username = ?";

	//prepare SQL query
	$primary_username_prepare = $connection->prepare($primary_username_query);	

	//BIND param
	$primary_username_prepare->bind_param("s", $primary_username);

	//execute the query
	$primary_username_prepare->execute();

	//get the result and store it in a var
	$result_id = $primary_username_prepare->get_result();

	// creating a ID variable 
	$id = "";

	// assign the id to a variable called ID
	if($result_id->num_rows == 1) {
		while ($row = $result_id->fetch_assoc()) {
			$id = $row["id"];
		}
	}

	//add password query 
	//prepare statement
	$add_password_prepared = $connection->prepare("INSERT INTO passwords (passwords_id, id, username, password, email, websitename) VALUES (NULL,?, ?, ?, ?, ?)");

	//create nonce and encrypt the result
	$nonce = random_bytes( SODIUM_CRYPTO_SECRETBOX_NONCEBYTES );
	$encrypted_result = sodium_crypto_secretbox( $password, $nonce, $key_secret );

	$hashed_password = base64_encode( $nonce . $encrypted_result );

	$add_password_prepared->bind_param("dssss", $id, $username, $hashed_password, $email, $websitename);

	//execution
	$add_password_prepared->execute();

	if($add_password_prepared->affected_rows == 1) {
		echo "Successfully added the password";
		header("Location: ../../dashboard/");
	}
	$connection->close();

 ?>