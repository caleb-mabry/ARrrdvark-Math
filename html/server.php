<?php 
$servername ="ardvarklearning.ch9a31kbn4gt.us-east-1.rds.amazonaws.com"
$username	="ardvarklearning";
$password	="C&Ccapstone2019";
$dbname		="ardvarklearning"
$port		="3306";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Just a test</p>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstName = test_input($_POST["firstName"]);
	$lastName = test_input($_POST["lastName"]);
	$password = test_input($_POST["password"]);
	$email = test_input($_POST["email"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if (isset($_POST["signup"])) {
	$firstName = test_input($_POST["firstName"]);
	$lastName = test_input($_POST["lastName"]);
	$password = test_input($_POST["password"]);
	$email = test_input($_POST["email"]);

	if (isset($_POST["emailAgree"])) {
		$emailAgree = '1';
	} else {
		$emailAgree = '0';
	}
	if (isset($_POST["termsAgree"])) {
		$termsAgree = '1';
	} else {
		$termsAgree = '0';
	}
	$conn = new mysqli($servername, $username, $password, $dbname, $port);
	$sql = "INSERT INTO users (email, firstName, lastName, password, receiveEmail, termsAgree) VALUES ('$email','$firstName','$lastName','$password','$emailAgree','$termsAgree')";
	$result = $conn->query($sql);
	if ($result) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
header("Location: https://ardvarklearning.net/login.php"); /* Redirect browser */
?>