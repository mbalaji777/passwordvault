<?php 	
	include_once "../connection/index.php";

	//start the session
	session_start();

	$password_delete_id = $_SESSION["password_id"];

	//query string
	$delete_query = "DELETE from passwords where passwords_id = ?";

	//preparing the statement
	$delete_prepared = $connection->prepare($delete_query);

	//binding the parameters
	$delete_prepared->bind_param("d", $password_delete_id);

	//execute the command
	$delete_prepared->execute();

	//check if rows affected
	if ($delete_prepared->affected_rows == 1) {
		echo "password deleted";
		header("Location: ../../dashboard/");
	}
 ?>