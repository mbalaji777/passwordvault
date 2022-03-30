<?php
	include_once 'backend/connection/index.php';

	$query_key_secret = "SELECT * FROM key_sodium";

	$query_key_prepared = $connection->prepare($query_key_secret);

	$query_key_prepared->execute();

	$result = $query_key_prepared->get_result();

	if ($result->num_rows == 1) {
		while ($row = $result->fetch_assoc()) {
			var_dump(sodium_bin2hex($row["key_secret"]));
		}
	}
?>