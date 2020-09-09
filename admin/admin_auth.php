<?php
	include("../conn.php");

$admin_name = $_POST['admin_name'];
$admin_pass = $_POST['admin_pass'];


$query = "SELECT * FROM admin WHERE admin_name='$admin_name'";
$result = mysqli_query($conn ,$query);

// var_dump($result);
// exit();
	if(mysqli_num_rows($result)==1)
	{
		$data = mysqli_fetch_assoc($result);
		if($data['admin_pass']==$admin_pass)
		{
			$_SESSION['is_admin_logged_in']=true;
			header("Location: admin_panel.php");
		}
		else
		{
			$_SESSION['msg'] = "This Admin password is incorrect";
			header("Location:index.php"); 
		}
	}
	else
	{
		$_SESSION['msg'] = "This admin username or password is incorrect ";
		header("Location:index.php");
	}
?>