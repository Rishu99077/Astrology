<?php
include("conn.php");

$for_mobile = $_POST['for_mobile'];

// print_r($email);
// die();

$query = "SELECT * FROM new_user WHERE mobile='$for_mobile'";	

$result = mysqli_query($conn, $query);
// var_dump($result);
// exit();

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);

	$mobile = [];
	foreach ( $data['mobile'] as $mail_mobile_row ) :
                       
		$email = $mail_mobile_row['email'];
		
		$u_id = $mail_mobile_row['id'];
		//if ( $this->sendByReaserchCat( $u_id, $rsrch_id ) ) {
			mail( $email, 'Today Tip', $tip, $headers  );
			$mobile[] = '91'.$mail_mobile_row['mobile'];

		
	endforeach;
		$mobile = implode(',', $mobile);
					// $tip=strip_tags($tip);
     //                $tip = urlencode($tip);
                
        $url = 'http://sms.abinfotech.net/api/sendhttp.php?authkey=211251Ad8ZNUyef35ad9e44b&sender=ONETIP&mobiles='."$mobile".'&message='."$tip".'&country=0&route=4';
	            
	                        

		file_get_contents($url);
	
}
else
{
	$_SESSION['msg']="This Mobile Number is incorrect";
	header("Location: forgot_pass.php");
}


?>