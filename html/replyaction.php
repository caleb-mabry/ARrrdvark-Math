<?php
include('db-connect.php');
$reply_content = $_POST['replyToTopic'];
$reply_by = $_SESSION['loginEmail'];
$post_id = $_GET['id'];


$query = "INSERT INTO reply(reply_id, reply_content, reply_by, post_id) VALUES ('', '$reply_content','$reply_by', '$post_id')";

$result = $conn->query($query);
	if ($result) {
		echo "Worked";
	} else {
		echo "False";
	}

?>