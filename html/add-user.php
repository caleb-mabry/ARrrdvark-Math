<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "arrrdvark_math";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (ID, FirstName, LastName, Password, Email)
VALUES (DEFAULT, $_POST["firstName"]','$_POST["lastName"]','$_POST["password"]','$_POST["email"]'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>