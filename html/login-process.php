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

$result =$conn->query($sql);
if(!$result) {
	echo "Something went wrong while signing in. Please try again later";
}
else {
	$_SESSION['signed_in'] = true;
	$_SESSION['user_name'] = $_POST['email'];
	header("Location: https://ardvarklearning.net/forum.php")
}
