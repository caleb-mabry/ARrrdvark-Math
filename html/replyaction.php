<?php
include('db-connect.php');
session_start();
$reply_content = mysqli_escape_string($conn,$_POST['replyToTopic']);
$reply_by = $_SESSION['loginEmail'];
$post_id = $_GET['id'];


$query = "INSERT INTO reply(reply_id, reply_content, reply_by, post_id) VALUES ('', '$reply_content','$reply_by', '$post_id')";

$result = $conn->query($query);
	if ($result) {
		header("Location:https://ardvarklearning.net/forum.php");
	} else {
		echo "False";
	}

?>
