<?php
// include('save_login.php'); 
if ((isset($_SESSION['name']) != '')) 
{
header('Location: vastu.php');
}
error_reporting(-1);

?>
<!DOCTYPE html>
<html lang="en-US">
<!-- Begin Head -->
<head>
<title>Astrology</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="Astrology">
<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
<meta name="author" content="hsoft" >
<meta name="MobileOptimized" content="320">
<!--Srart Style -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"> -->
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Favicon Link -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png">
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1624167494576352');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1624167494576352&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>
<style>
	html
	{
		scroll-behavior: smooth;
	}
	.ast_main_menu_wrapper .ast_menu li a .fa
	{
		margin: 0;
		padding: 0;
	}
</style>
<body>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Header Start -->
<div class="ast_top_header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_log">

				<div class="ast_contact_details">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +1800 326 3264</li>
						<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>InnovativeIndia Technology</a></li>
					</ul>
				</div>
				<div class="ast_autho_wrapper">
					<ul>
						<li><a href="login.php"><i class="fa fa-sign-in text-success"></i> Log In</a></li>
						<li><a href="sign.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
						<li id="google_translate_element"  style="padding: 0; display: block; margin-left: 25px;"></li>
						<!-- <li><a href="logout.php"><i class="fa fa-power-off"></i> Log-Out</a></li> -->
						<!-- <li class="ast_search">
							<a href="javascript:;"><i class="fa fa-search"></i></a>
							<div class="ast_search_field">
								<form>
									<input type="text" placeholder="Search Here">
									<button type="button"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</li> -->
						<!-- <li class="ast_cart">
							<a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>
							<div class="ast_cart_box">
								<div class="ast_cart_list">
									<ul>
										<li>
											<div class="ast_cart_img">
												<img src="images/content/Products/thumb1.jpg" class="img-responsive">
											</div>
											<div class="ast_cart_info">
												<a href="#">Yellow Sapphire</a>
												<p>1 X $20.00</p>
												<a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>
											</div>
										</li>
										<li>
											<div class="ast_cart_img">
												<img src="images/content/Products/thumb1.jpg" class="img-responsive">
											</div>
											<div class="ast_cart_info">
												<a href="#">yantra</a>
												<p>1 X $10.00</p>
												<a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>
											</div>
										</li>
									</ul>
								</div>
								<div class="ast_cart_total">
									<p>total<span>$30.00</span></p>
								</div>
								<div class="ast_cart_btn">
									<button type="button">view cart</button>
									<button type="button">checkout</button>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ast_header_bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_logo">
					<a href="index.php"><img src="images/header/logo.png" alt="Logo" title="Logo"></a>
					<button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
				<div class="ast_main_menu_wrapper">
					<div class="ast_menu">
						<ul>
							<li><a href="index.php"><i class="fa fa-home text-warning" aria-hidden="true"></i> home</a></li>
							<li><a href="about.php"><i class="fa fa-bell text-success" aria-hidden="true"></i> About</a></li>
							<li><a href="#"><i class="fa fa-eye text-primary" aria-hidden="true"></i> Astrology services</a>
								<ul class="submenu">
									<li><a href="service.php"><i class="fa fa-eye text-primary" aria-hidden="true"></i> Astrology services</a>
									<li><a href="horoscope.php"><i class="fa fa-history text-info" aria-hidden="true"></i> horoscope</a></li>
									<li><a href="vastu.php"><i class="fa fa-home text-warning" aria-hidden="true"></i> vastu shastra</a></li>
									<li><a href="gemstone.php"><i class="fa fa-star-half-o text-success" aria-hidden="true"></i> gemstone</a></li>
									<li><a href="numerology.php"><i class="fa fa-moon-o text-primary" aria-hidden="true"></i> numerology</a></li>
								</ul>
							</li>		
							<li><a href="team.php"><i class="fa fa-users text-warning" aria-hidden="true"></i> Astrologers</a></li>
							<li><a href="privacy_policy.php"><i class="fa fa-lock text-danger" aria-hidden="true"></i> privacy policy</a></li>
							<li><a href="user/index.php"><i class="fa fa-street-view text-primary" aria-hidden="true"></i> User's Panel </a></li>
							<li><a class="bg-primary" href="login.php"><i class="fa fa-quora text-success" aria-hidden="true"></i> Ask questions</a></li>
							<!-- <li><a class="popup-with-zoom-anim ask_que" href="#login-dialog">Ask questions</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header End --> 
<div class="shareleft" style="position: fixed; justify-content: space-between; align-items: flex-start; top: 186px; left: 0; cursor: pointer;">
	<div class="share_link" style="margin: 0 auto; padding: 0; width: 100%;">
		<img src="images/header/fb.jpg">
	</div>
	<div class="share_link" style="margin: 0 auto; padding: 0; width: 100%;">
		<img src="images/header/twit.jpg">
	</div>
	<div class="share_link" style="margin: 0 auto; padding: 0; width: 100%;">
		<img src="images/header/whatsapp.jpg">
	</div>
</div>

<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/custom.js"></script>
