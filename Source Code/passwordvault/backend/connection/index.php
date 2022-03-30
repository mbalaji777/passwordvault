<?php 
	//creating environment variables to connect to the database

    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "passwordvault";
    $key_secret = "";

    //actual connection
    $connection = new mysqli($db_host, $db_username, $db_password, $db_name);

    $query_key_secret = "SELECT * FROM key_sodium";

    $query_key_prepared = $connection->prepare($query_key_secret);

    $query_key_prepared->execute();

    $result = $query_key_prepared->get_result();

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            $key_secret = $row["key_secret"];
        }
    }

    //check connection
    // if ($connection -> connect_errno) {
    //     echo "Failed to connect to database : " . $connection -> connect_error;
    //     exit();
    // }
    // else {
    //     echo "connected successfully";
    // }



 ?>