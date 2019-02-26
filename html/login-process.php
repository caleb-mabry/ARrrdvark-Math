<?php
    include('db-connect.php');
    session_start();
// If form submitted, insert values into the database.
    if (isset($_POST['submitButton'])){
        // removes backslashes
        $username = stripslashes($_REQUEST['loginEmail']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn,$username);
        $password = stripslashes($_REQUEST['loginPassword']);
        $password = mysqli_real_escape_string($conn,$password);
    //Checking is user existing in the database or not
        $query = "SELECT *
        FROM `users` 
        WHERE loginEmail='$username'
        and loginPassword='".sha1($password)."'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        echo "password is incorrect";
        if($rows==1){
            $_SESSION['loginEmail'] = $username;
            // Redirect user to index.php
            header("Location: index.html");
            echo "pass";
        }
        else{
            echo "password is incorrect";
            header("Location: index.html");
        }

    }else{
        echo $_SESSION["loginEmail"];

    }
        ?>