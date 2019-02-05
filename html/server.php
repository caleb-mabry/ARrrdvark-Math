<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "root";
$dbname = "arrrdvark_math";

// Create connection
$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);

if (isset($_POST["signup"])) {
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$emailAgree = $_POST["emailAgree"];
	$termsAgree = $_POST["termsAgree"];
	$sql = "INSERT INTO users (email, firstName, lastName, password, receiveEmail, termsofServiceAgreement) VALUES ('$email','$firstName','$lastName','$password','$emailAgree','$termsAgree')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
$conn->close();
?>