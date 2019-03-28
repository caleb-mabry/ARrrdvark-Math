<?php
include('db-connect.php');
$id=$_GET['id'];
$query = "DELETE FROM posts WHERE post_id=$id";
if ($conn->query($query)) {
header("Location: https://ardvarklearning.net/forum.php");
} else {
echo "GET FUCKED";
}
?>
