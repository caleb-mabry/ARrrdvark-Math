<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "root";
$dbname = "arrrdvark_math";

// Create connection
$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);

	if (empty($_POST['firstName'])) {
		$firstNameErr = "First name is required";
	} else {
		$firstName = $_POST['firstName'];
	}
	
	if (empty($_POST['lastName'])) {
		$lastNameErr = "Last name is required";
	} else {
		$lastName = $_POST['lastName'];
	}
	
	if (empty($_POST['password'])) {
		$passwordErr = "Password is required";
	} else {
		$password = $_POST["password"];
	}

	if (empty($_POST['email'])) {
		$emailErr = "Email is required"
	} else {
		$email = $_POST['email'];
	}

	$sql = "INSERT INTO users (FirstName, LastName, Password, Email) VALUES ('$firstName','$lastName','$password','$email')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
$conn->close();
?>