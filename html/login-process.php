<?php
include('db-connect.php');
session_start();
if (isset($_POST["loginSubmit"])) {
	$sql = "SELECT email, password 
	FROM users 
	WHERE email = '$emailLogin' 
	AND password = '$passwordLogin'";

	 $myusername = mysqli_real_escape_string($db,$_POST['emailLogin']);
      $mypassword = mysqli_real_escape_string($db,$_POST['passwordLogin']); 

	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];

	$count = mysqli_num_rows($result);
	if($count == 1) {
		session_register("myusername");
		$_SESSION['login_user'] = $myusername;

		header("location: login.php");
	}else {
		$error = "Your Login Name or Password is invalid";
	}
}
?>
