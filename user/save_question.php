<?php
include('../conn.php');

$timezone = date_default_timezone_get('Asia/Kolkata');
date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y h:i:s a', time());


if(isset($_POST)==true)
{
	$cust_id      =  $_POST['cust_id'];
	$full_name    =  $_POST['full_name'];
	$email        =  $_POST['email'];
	$mobile       =  $_POST['mobile'];
	$category	  =  $_POST['category'];
	$dob          =  $_POST['dob'];
	$time         =  $_POST['time'];
	$question     =  $_POST['question'];
	$date         =  date('m/d/Y h:i:s a', time());
	
	$query = "INSERT INTO user_questions(cust_id,full_name,email,mobile,category,date_of_birth,time_of_birth,question,ask_date_time) VALUES('$cust_id','$full_name','$email','$mobile','$category','$dob','$time','$question','$date')";
	
	// print_r($query);
	// exit();

}
	mysqli_query($conn,$query);
	header("Location: ../PHP_Bolt-master/");

?>
