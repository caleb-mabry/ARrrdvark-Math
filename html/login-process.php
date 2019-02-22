<?php
include('db-connect.php');

$sql = "SELECT
			email
		FROM
			users
		WHERE
			email = $_POST["emailLogin"]
		AND
			user_pass = sha1($_POST["passwordLogin"])";

$conn->query($sql);

	header("Location: https://ardvarklearning.net/forum.php")
	?>
