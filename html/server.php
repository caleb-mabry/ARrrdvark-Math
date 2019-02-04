<?php
	// Connect to the database
	$db = mysql_connect('localhost', 'root', 'root', 'arrrdvark_math');

	// If the signup button is clicked
	if (isset($_POST['signup'])) {
		$firstName = mysql_real_escape_string($_POST['firstName']);
		$lastName = mysql_real_escape_string($_POST['lastName']);
		$password = mysql_real_escape_string($_POST['password']);
		$email = mysql_real_escape_string($_POST['email']);

		// ensure that forms are filled out properly
		if (empty($firstName)) {
			array_push($errors, "firstName is Required"); //add error to errors array
		}
		if (empty($lastName)) {
			array_push($errors, "lastName is Required"); //add error to errors array
		}
		if (empty($password)) {
			array_push($errors, "password is Required"); //add error to errors array
		}
		if (empty($email)) {
			array_push($errors, "email is Required"); //add error to errors array
		}

		// If there are no errors, save user to database
		if(count($errors) == 0) {
			$password = md5($password); //Encrypt the password before it is stored into the database
			$sql = "INSERT INTO users (firstName, lastName, password, email) VALUES ('$firstName', '$lastName', '$password', '$email')";
			mysqli_query($db, $sql);
		}
	}

?>