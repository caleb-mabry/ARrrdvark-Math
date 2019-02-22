<?php include('db-connect.php');

            $sql = "SELECT 
                        email,
                        password
                    FROM
                        users
                    WHERE
                        email = mysql_real_escape_string($_POST['emailLogin'])
                    AND
                        password = sha1($_POST['emailPassword'])";
$result = mysqli_query($conn,$sql);
      if(!$result)      {
                //something went wrong, display the error
                echo 'Something went wrong while signing in. Please try again later.';
                echo mysql_error(); //debugging purposes, uncomment when needed
            }
            else {
            	header("Location: Deeznutz.com");
            }
?>

