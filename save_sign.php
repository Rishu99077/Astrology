<?php
include("conn.php");

if(isset($_POST)==true)
{


	$a = $_POST['full_name'];
	$b = $_POST['email'];
	$c = sha1($_POST['password']);
	$d = sha1($_POST['con_pass']);
	$e = $_POST['mobile'];
	$f = $_POST['gender'];
	$g = $_POST['address'];


	$query = "INSERT INTO new_user(full_name,email,password,confirm_password,mobile,gender,address) VALUES('$a','$b','$c','$d','$e','$f','$g')";
	// print_r($query);
	// exit();
}
mysqli_query($conn,$query);
header('Location: success_sign.php', true);

?>