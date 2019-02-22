<?php
include('db-connect.php');

$sql = "SELECT * FROM 'users' WHERE email=$_POST["$emailLogin"] AND password='".sha1($_POST["$passwordLogin"])."'";
$conn->query($sql);

header("Location: https://ardvarklearning.net/forum.php")
?>
