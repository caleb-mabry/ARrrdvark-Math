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
if ($conn->query($sql)) {
	echo "It worked";
}
else {
	echo "please give me this error message";
}

?>

