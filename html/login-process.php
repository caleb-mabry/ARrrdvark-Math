<?php include('db-connect.php');
session_start();
// If form submitted, insert values into the database.
    if (isset($_POST['submitButton'])){
        // removes backslashes
        $username = stripslashes($_POST['loginEmail']);
        $password = stripslashes($_POST['loginPassword']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn,$username);
        $password = mysqli_real_escape_string($conn,$password);
    	//Checking is user existing in the database or not
        $query = "SELECT *
        FROM users 
        WHERE email='$username'
        and password='".sha1($password)."'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['loginEmail'] = $username;
            // Redirect user to forum.php
            header("Location: https://ardvarklearning.net/forum.php");
        }
        else{
            $_SESSION['error'] = "Your username or password is incorrect";
	header("Location: https://ardvarklearning.net/login.php");
        }

    }else{
        print_r($_SESSION);

    }
        ?>
