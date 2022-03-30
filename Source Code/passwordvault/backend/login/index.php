<?php 
	session_start();
	//establishing connection to the database
	include_once '../connection/index.php';

	//creating local PHP variables
	$username = "";
	$password = "";

	// if the user clicks the submit button the values from the form will be assigned to the local PHP variables
	if(isset($_POST["submit"])) {
		$username = $_POST["inlineFormInputGroupUsername"];
		$password = $_POST["inlineFormInputPassword"];
	}

	//creating prepared SQL statements
	$query_login_prepared = $connection->prepare("SELECT * FROM accounts where username = ?");

	//Binding the parameters to the SQL query
	$query_login_prepared->bind_param("s", $username);
	
	// Executing the query
	$query_login_prepared->execute();
	
	//storing the result?
	//$query_login_prepared->store_result();

	$result = $query_login_prepared->get_result();
	//if the username exists then the value is one, if not its zero
	if($result->num_rows == 1) {
		while ($row = $result->fetch_assoc()) {
			$hash = $row["password"];
			if (password_verify($password, $hash)) {
				$_SESSION["username"]  = $username ;
				$_SESSION["id"] = $row["id"];
				error_log("Username ".$username." logged in to the application on ".time()." \n ", 3, "../log/error-log.log");
				header("Location: ../../dashboard/");
			}
			else {
				$error = "Username or Password is Incorrect";
				error_log("Invalid Login attempt from user ".$username." on".time(), 3, "../log/error-log.log");
				header("Location: ../../login/index.php?error=$error");
			}
		}
	}

	$connection->close();

	//printf("\n %d Rows found", $query_login_prepared->num_rows());

	// $query_login_prepared->bind_result($col1, $col2, $col3, $col4, $col5, $col6);

	// while ($query_login_prepared->fetch()) {
	// 	printf("%d %s %s %s %d %s\n", $col1, $col2, $col3, $col4, $col5, $col6);
	// }
?>