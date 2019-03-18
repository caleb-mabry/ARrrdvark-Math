<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$topicTitle = test_input($_POST["titleOfTopic"]);
	$topicText = test_input($_POST["textOfTopic"]);
	$topicOwner = $_SESSION['loginEmail'];
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($_POST["submit"])) {
	$query = "INSERT INTO posts (post_content,post_date,post_title,post_by) VALUES ('$topicText', 'DATE: Auto CURDATE()', '$topicTitle', '$topicOwner')";

	con->query($query);
}
header("Location: https://ardvarklearning.net/forum.php");
?>
?>