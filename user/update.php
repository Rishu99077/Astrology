<?php
	// print_r($_POST);
include("../conn.php");
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
}
// print_r($id);
// exit();
if($_FILES['image']['name']=="")
{
	$a = $_POST['full_name'];
	$b = $_POST['address'];
	$c = $_POST['gender'];
	$d = $_POST['mobile'];

	$query = "UPDATE new_user SET full_name='$a',address='$b',gender='$c',mobile='$d' WHERE id='$id'";

	// print_r($query);
	// exit();
	mysqli_query($conn,$query);
	header("Location:user_profile.php");
}
else
{
	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$size = $_FILES['image']['size'];

	$arr = explode(".", $name);
	$ext = end($arr);

	if($ext=="jpg" || $ext=="jpeg" || $ext=="gif" || $ext =="png")
	{
		if($size<=(1024*1024*1))
		{
		$new_name = time().rand(10000, 100000).".".$ext;
		$a = $_POST['full_name'];
		$d = $_POST['address'];
		$e = $_POST['gender'];
		$g = $_POST['mobile'];

		$query ="UPDATE new_user SET full_name='$a',address ='$d',gender='$e',mobile='$g',image='$new_name' WHERE id=$id";

		move_uploaded_file($tmp_name, "img/avatars/".$new_name);

		mysqli_query($conn, $query);
		header("location:user_profile.php");
		}
		else
		{
			$_SESSION['msg'] = "File is Too Large";
			header("location:edit_profile.php");

		}
	}
	else
	{
		$_SESSION['msg']="File Type is not allowed";
		header("Location:edit_profile.php");	
	}
}
?>