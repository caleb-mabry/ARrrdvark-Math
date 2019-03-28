<?php
include('db-connect.php');
$id=$_GET['id'];
$rid=$_GET['rid'];
$query = "DELETE FROM reply WHERE reply_id=$rid";
if ($conn->query($query)) {
header("Location: https://ardvarklearning.net/questionview.php?id=$id");
} else {
echo "GET FUCKED";
}


?>
