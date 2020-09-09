<?php
include("../conn.php");

$guru_name = $_POST['guru_name'];
$guru_pass = $_POST['guru_pass'];


$query = "SELECT * FROM guruji WHERE guru_name='$guru_name'";
$result = mysqli_query($conn ,$query);

// var_dump($result);
// exit();
	if(mysqli_num_rows($result)==1)
	{
		$data = mysqli_fetch_assoc($result);
		if($data['guru_pass']==$guru_pass)
		{
			$_SESSION['id']=$data['id']; 
			$_SESSION['is_guru_logged_in']=true;
			header("Location: guruji_panel.php");
		}
		else
		{
			$_SESSION['msg'] = "This Guruji password is incorrect";
			header("Location:index.php"); 
		}
	}
	else
	{
		$_SESSION['msg'] = "This Guruji username or password is incorrect ";
		header("Location:index.php");
	}
?>