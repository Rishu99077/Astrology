<?php
include("conn.php");	

$email = $_POST['email'];
$pass = $_POST['password'];

$pass = sha1($pass);
// print_r($pass);
// die();

$query = "SELECT * FROM new_user WHERE email='$email'";	

$result = mysqli_query($conn, $query);
// var_dump($result);
// exit();

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['password']==$pass)
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['email']=$data['email'];
		$_SESSION['is_user_logged_in']=true;
		header("Location: user/index.php");
	}
	else
	{
		$_SESSION['msg']="This password is incorrect";
		header("Location: login.php");
	}
}
else
{
	$_SESSION['msg']="This Username and password is incorrect";
	header("Location: login.php");
}
// $inactive = 600; 

// $session_life = time() - $_session['timeout'];

// if($session_life > $inactive)
// {  session_destroy(); header("Location: logout.php");     }

// $_session['timeout']=time();

$inactive = 60;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive; 

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("Location:index.php");     }

$_SESSION['timeout']=time();
?>
