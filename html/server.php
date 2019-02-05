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
if (isset($_POST[''])) {
$sql = "INSERT INTO users (FirstName, LastName, Password, Email)
VALUES (DEFAULT, $_POST["firstName"]','$_POST["lastName"]','$_POST["password"]','$_POST["email"]'";
}
$conn->close();
?>