<?php
include('db-connect.php');

$sql = "SELECT
			email
		FROM
			users
		WHERE
			email = mysqli_real_escape_string($_POST['emailLogin'])
		AND
			user_pass = sha1($_POST['user_pass'])";

$result = mysqli_query($sql);
if(!$result) {
	echo "Something went wrong while signing in. Please try again later";
}
else {
	$_SESSION['signed_in'] = true;
	$_SESSION['user_name'] = $_POST['email'];
	header("Location: https://ardvarklearning.net/forum.php")
}
