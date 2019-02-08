<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "root";
$dbname = "arrrdvark_math";

// Create connection
$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstName = test_input($_POST["firstName"]);
	$lastName = test_input($_POST["lastName"]);
	$password = test_input($_POST["password"]);
	$email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST["signup"])) {
	$firstName = test_input($_POST["firstName"]);
	$lastName = test_input($_POST["lastName"]);
	$password = test_input($_POST["password"]);
	$email = test_input($_POST["email"]);
	if()
	if (isset($_POST["emailAgree"])) {
		$emailAgree = '1';
	} else {
		$emailAgree = '0';
	}
	if (isset($_POST["termsAgree"])) {
		$termsAgree = '1';
	} else {
		$termsAgree = '0';
	}
	$sql = "INSERT INTO users (email, firstName, lastName, password, receiveEmail, termsAgree) VALUES ('$email','$firstName','$lastName','$password','$emailAgree','$termsAgree')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
$conn->close();
?>