<?php
$servername = "ardvarklearning.ch9a31kbn4gt.us-east-1.rds.amazonaws.com";
$username   = "ardvarklearning";
$password   = "C&Ccapstone2019";
$dbname     = "ardvarklearning";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	echo "problem connecting to DB.  Check the file db-connect.php to see if you can resolve it!";
	die("connection failed: ". $conn->connect_error);
}

