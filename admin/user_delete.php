<?php
include("../conn.php");

$id = $_GET['userid'];

// print_r($id);
// exit();

$query1 = "SELECT * FROM active_user WHERE id ='$id'";

$result1 = mysqli_query($conn ,$query1);

$data1 = mysqli_fetch_assoc($result1);

if(isset($_POST)==true)
{


	$a = $data1['full_name'];
	$b = $data1['email'];
	$c = sha1($data1['password']);
	$d = sha1($data1['con_pass']);
	$e = $data1['mobile'];
	$f = $data1['gender'];
	$g = $data1['address'];


	$query = "INSERT INTO new_user(full_name,email,password,confirm_password,mobile,gender,address) VALUES('$a','$b','$c','$d','$e','$f','$g')";
}
mysqli_query($conn,$query);

$sql = "DELETE FROM active_user WHERE id='$id'";

mysqli_query($conn,$sql);

header('Location: admin_panel.php', true);
?>