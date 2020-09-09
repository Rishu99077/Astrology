<?php
include("../conn.php");

$timezone = date_default_timezone_get('Asia/Kolkata');
date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y h:i:s a', time());

if(isset($_POST)==true)
{
	$cust_id        = $_POST['cust_id'];
	$customer_name  = $_POST['full_name'];
	$category       = $_POST['category'];
	$date_of_birth  = $_POST['date_of_birth'];
	$time_of_birth  = $_POST['time_of_birth'];
	$question       = $_POST['question'];
	$answer         = $_POST['answer'];
	$ask_date_time  = $_POST['ask_date_time'];
	$date    		= date('m/d/Y h:i:s a', time());	

$query = "INSERT INTO reply(cust_id,customer_name,category,date_of_birth,time_of_birth,question,answer,ask_date_time,rply_date_time,status) VALUES('$cust_id','$customer_name','$category','$date_of_birth','$time_of_birth','$question','$answer','$ask_date_time','$date','close')";

// print_r($query);
// exit();

}
mysqli_query($conn , $query);


header("Location:guruji_panel.php");

?>