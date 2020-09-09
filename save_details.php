<?php
include('conn.php');

if(isset($_POST)==true)
{
	$key     =  $_POST['key'];
	$salt    =  $_POST['salt'];
	$txnid   =  $_POST['txnid'];
	$amount  =  $_POST['amount'];
	$pinfo	 =  $_POST['pinfo'];
	$fname   =  $_POST['fname'];
	$email   =  $_POST['email'];
	$mobile  =  $_POST['mobile'];

	$payhash_str = $key . '|' . checkNull($txnId) . '|' .checkNull($amount)  . '|' .checkNull($mobile)  . '|' . checkNull($fName) . '|' . checkNull($email) . '|'  . $salt;

	function checkNull($value) {
            if ($value == null) {
                  return '';
            } else {
                  return $value;
            }
      }

	$hash = strtolower(hash('sha512', $payhash_str));
	$arr['result'] = $hash;
	
	$query = "INSERT INTO user_details(key,salt,txnid,amount,pinfo,fname,email,mobile) VALUES('$key','$salt','$txnid','$amount','$pinfo','$fname','$email','$mobile')";
	
	print_r($query);
	exit();

}
	mysqli_query($conn,$query);
	header("Location: index.php");

?>