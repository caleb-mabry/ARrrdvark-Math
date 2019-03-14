<?php
session_start();
session_unset();
unset($_SESSION['loginEmail']);
session_destroy();
header("Location: https://ardvarklearning.net/login.php");
?>
