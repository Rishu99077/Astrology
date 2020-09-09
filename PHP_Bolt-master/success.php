<?php
session_start();
//require('config.php');
extract($_REQUEST);
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";
//echo "<pre>";
//print_r($_REQUEST);
//print_r($_SESSION);
//exit;
// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) 
{
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       
	  
	  // echo $status." ".$txnid;
		if ($status == "success" && $txnid!="") 
		{
		$msg = "Transaction completed successfully";	
		}
	     else 
		   {
           $msg = "Invalid Transaction. Please Try Again";
		   }
?>	



<html>
<head>
<title>Payumoney Payment Gateway Integration</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../cimage25/109651text.css" rel="stylesheet" type="text/css">
<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0203103334_0) return;
        window.mm_menu_0203103334_0 = new Menu("root",91,19,"Century Gothic",13,"#FFFFFF","#000000","#660000","#FF9900","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0203103334_0.addMenuItem("History","window.open('109651history.html', '_self');");
  mm_menu_0203103334_0.addMenuItem("Objectives","window.open('109651objective.html', '_self');");
   mm_menu_0203103334_0.hideOnMouseOut=true;
   mm_menu_0203103334_0.bgColor='#555555';
   mm_menu_0203103334_0.menuBorder=1;
   mm_menu_0203103334_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0203103334_0.menuBorderBgColor='#FEFFF9';
    window.mm_menu_0203103632_0 = new Menu("root",170,19,"Century Gothic",13,"#FFFFFF","#000000","#660000","#FF9900","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0203103632_0.addMenuItem("Admission","window.open('109651admission.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("School Timing","window.open('109651schooltiming.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("Evaluation Procedure","window.open('109651evaluation.html', '_self');");
  mm_menu_0203103632_0.addMenuItem("Co-Curricular Activities","window.open('109651cocurricular.html', '_self');");
   mm_menu_0203103632_0.hideOnMouseOut=true;
   mm_menu_0203103632_0.bgColor='#555555';
   mm_menu_0203103632_0.menuBorder=1;
   mm_menu_0203103632_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0203103632_0.menuBorderBgColor='#FEFFF9';

mm_menu_0203103632_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="../cimage25/109651mm_menu.js"></script>
<script type="text/javascript" src="../cimage25/109651sliderman.1.3.7.js"></script>
<link rel="stylesheet" type="text/css" href="../cimage25/109651sliderman.css" />
<style type="text/css">
<!--
.style1 {
	font-size: 16;
	font-weight: bold;
	color: #009933;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="submitPayuForm()">
<script language="JavaScript1.2">mmLoadMenus();</script>
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#DFFFFF" class="bg">
  <tr>
    <td align="center" valign="middle"><table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left" valign="top">
		<table width="990" height="60" border="0" cellpadding="0" cellspacing="0" background="../cimage25/109651_01.jpg" style="margin-top:-195px;">
          <tr>
            <td align="center" valign="middle" class="black"><a href="109651.html" target="_self">HOME</a>     |     <a href="#" name="link4" id="link1" onMouseOver="MM_showMenu(window.mm_menu_0203103334_0,-20,25,null,'link4')" onMouseOut="MM_startTimeout();">ABOUT US</a>     |     <a href="#" name="link5" id="link2" onMouseOver="MM_showMenu(window.mm_menu_0203103632_0,-10,25,null,'link5')" onMouseOut="MM_startTimeout();">GENERAL INFORMATION </a>     |     <a href="109651boardtrust.html" target="_self">BOARD OF TRUSTEES</a>     |     <a href="109651rules.html" target="_self">RULES & REGULATION</a>     |     <a href="#"><a href="109651contact.html" target="_self">CONTACT US</a>     |     <a href="109651stenquiry.html" target="_self">STUDENT ENQUIRY</a>     |     <a href="admissionform.php" target="_self">ADMISSION FORM</a>
			</td>
          </tr>
		</table>
		</td>
      </tr> 

	<tr>
    <td height="3" align="center" valign="middle"><?php echo $msg1.$msg2.$msg3.$msg; ?></td>
	</tr>
	  
    </table></td>
  </tr>
  
  
 
  <tr>
    <td height="3" align="center" valign="middle" class="dot"></td>
  </tr>
  

</table>
</body>
</html>