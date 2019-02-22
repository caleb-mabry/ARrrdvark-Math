<?php
include('db-connect.php');

            $sql = "SELECT 
                        email,
                        password
                    FROM
                        users
                    WHERE
                        email = '" . mysql_real_escape_string($_POST['emailLogin']) . "'
                    AND
                        password = '" . sha1($_POST['emailPassword']) . "'";
$conn->query($sql);

header("Location: https://ardvarklearning.net/forum.php")
?>
