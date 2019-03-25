<?php
session_start();
$title = "Post View";
include('db-connect.php');
include('header.php');

?>
<body>
<div class="row">
	<div class="particles-js"></div>
	<div class="col-2">
	</div>
	<div class="col-8">
		<?php
		$id = $_GET['id'];
		$query = "SELECT * FROM posts WHERE post_id=$id";
		$result = $conn->query($query);
		if ($row=$result->fetch_assoc()) {
		echo "Welcome " . $row['post_content'] . "<br>";
		echo "What's going on" . $row['post_title'];
		} 
else { echo "no";
}
?>
	</div>
	<div class="col-2">
	</div>
</div>
</body>
</html>
