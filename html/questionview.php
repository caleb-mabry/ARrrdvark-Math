<?php
session_start();
$title = "Post View";
include('db-connect.php');
include('header.php');

?>
<body>
	  <div id="particles-js"></div>
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
			echo "<a href='questionview.php?id=$id><br>";
			echo "<div class='row' style='font-family: vanillaregular'>";
			echo "<div class='col rounded' style='background-color:white'>";
			echo "Topic: &nbsp" . $row['post_title'];
			echo "<br><br>";
			echo "What's happening: " .$row['post_content'];
			echo "<div class='text-right'>";
			echo "View | Reply | Delete";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<br></a>";
			}
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
