<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "root";
$dbname = "arrrdvark_math";

// Create connection
$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);

if (isset($_POST['signup'])) {
	$sql = "INSERT INTO users VALUES ('"$_POST['firstName']."','"$_POST['lastName']."','"$_POST['password']."','"$_POST['email']."')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
$conn->close();
?>