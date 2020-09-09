<?php
include("conn.php");

$a = $_POST['u'];

$query = "SELECT * FROM new_user WHERE email= '$a'";

$result = mysqli_query($conn, $query);
	// print_r($result);
	// exit();
if(mysqli_num_rows($result)==1)
{
	echo "This Username Already Register";
}
?>
