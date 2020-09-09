<?php
include("conn.php");
$a = $_POST['mobile'];
$query = "SELECT * FROM new_user WHERE mobile= '$a'";
$result = mysqli_query($conn, $query);
// print_r($result);
// exit();
if(mysqli_num_rows($result)==1)
{
	echo "This Number is Already Register";
}
?>