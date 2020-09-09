<?php

$timezone = date_default_timezone_get('Asia/Kolkata');
date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y h:i:s a', time());

if(isset($_POST)==true)
{
include("../conn.php");

$id        = $_POST['id']; 
$full_name = $_POST['full_name'];
$email     = $_POST['email'];
$age       = $_POST['age'];
$mobile    = $_POST['mobile'];
$message   = $_POST['message'];
$experience= $_POST['experience'];
$date      = date('m/d/Y h:i:s a', time());


$query = "INSERT INTO user_feed(cust_id,full_name,email,age,mobile,message,experience,time_feed) VALUES('$id','$full_name','$email','$age','$mobile','$message','$experience','$date')";
}
mysqli_query($conn,$query);
header("Location: ../thank_you.php");
?>