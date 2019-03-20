<?php
include('db-connect.php');
session_start();
ini_set('display_errors',1);
error_reporting(-1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$topicTitle = mysqli_escape_string($conn,test_input($_POST["titleOfTopic"]));
	$topicOwner = $_SESSION["loginEmail"];
	$topicText = mysqli_escape_string($conn,test_input($_POST["textOfTopic"]));
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
$timestamp = date(DATE_RFC2822);
if (isset($_POST["submit"])) {
	$query = "INSERT INTO posts (post_id,post_content,post_date,post_title,post_by) VALUES ('','$topicText', '$timestamp', '$topicTitle', '$topicOwner')";

	if($conn->query($query) === TRUE) {
	header("Location: https://ardvarklearning.net/forum.php");
		printf("Posts created successfully");
} else {
printf($conn->error);
}
}
?>
