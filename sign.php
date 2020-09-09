<?php
include("header.php");
?>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<!-- <script type="text/javascript" src="js/owl.carousel.js"></script> -->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<!-- <script type="text/javascript" src="js/custom.js"></script> -->
<!-- <script type="text/javascript" src="js/val.js"></script> -->
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<script>
function myFunctionPass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function myFunctionCon() {
  var x = document.getElementById("con_pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style>
	body
	{
	width: 100%;
	min-height: 800px;
	background-color: orange;
	position:relative;
	background-attachment:fixed;
	background-size: cover;
	color:#ffffff;
	padding:0px 0px 0px 0px;
	background-image: url(images/content/login.jpg);
    background-position: center center;
	background-repeat: no-repeat;
	text-align:center;
	}
	form p
	{
		padding-top: 20px;
	}
	.val_msg
	{
		margin: 0;
		padding: 0;
	}
</style>
</head>
<body>
	<!--Slider Start-->
<div class="ast_slider_wrapper style_1" style="height: 635px; background-repeat: no-repeat; background-size: 1400px;">
	<div class="ast_banner_text">
		<div class="starfield">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<!-- <div class="ast_waves">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div> -->
		<div class="ast_waves2">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<!-- <div class="ast_waves3">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div> --> 
		<div class="container">
			<div class="ast_bannertext_wrapper">
				<h3>Astrology revels the will of God</h3>
				<ul class="ast_toppadder40 ast_bottompadder50">
					<li>horoscopes</li>
					<li>gemstones</li>
					<li>numerology</li>
				</ul>
				<a class="ast_btn" href="signup.php">make it now</a>
			</div>
		</div>
	</div>
</div>
<script>
var check = true;
function check_username()
{
  var a = $("#email").val();
    $.ajax({
      url : "checkusername.php",
      type : "post",
      data : {u:a},
      success : function(res){
        // alert(res);
        $("#email_msg").html(res);
        check=false;
      }
    });
}


$(document).ready(function(){
  $("#email").blur(function(){
    check_username();
  });

  $("#submit").click(function(){
    var a = $("#full_name").val();
    var b = $("#email").val();
    var c = $("#password").val();
    var d = $("#con_pass").val();
    var e = $("#mobile").val();
    var f = $("#address").val();
    


    var x = $("#male").is(":checked");
    var y = $("#female").is(":checked");

    if(a=="")
    {
      check=false;
      $("#full_name_msg").html("Insert Your Full Name");
    }
    else
    {
      $("#full_name_msg").html("");
    }
    if(b=="")
    {
      check=false;
      $("#email_msg").html("Insert Your Username/Email");
    }
    else
    {
      
      
      var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(reg.test(b)==false)
      {
        check=false;
        $("#email_msg").html("Insert Correct Email Id");
      }
      else
      {
        check_username();
        $("#email_msg").html("");

      }
    }
    if(c=="")
    {
      check=false;
      $("#password_msg").html("Insert your Password");
    }
    else
    {
      $("#password_msg").html("");

    }
    if(d=="")
    {
      check=false;
      $("#con_pass_msg").html("Insert Re-Password");
    }
    else
    {
      
      $("#con_pass_msg").html("");
      if(c != d)
      {
        check=false;
        $("#con_pass_msg").html("Password and Re-Password not Same");
      }
      else
      {
        $("#con_pass_msg").html("");
      }
    }
    if(e=="")
    {
      check=false;
      $("#mobile_msg").html("Insert Your Contact Number");
    }
    else
    {
      
      $("mobile_msg").html("");
      if(isNaN(e)==true)
      {
        check=false;
        $("#mobile_msg").html("Insert Numbers Only");

      }
      else
      {
        $("#mobile_msg").html("");
        if(e.length != 10)
        {
          check=false;
          $("#mobile_msg").html("Insert 10 Digits");
        }
        else
        {
          
          $("#mobile_msg").html("");
        }

      }
    }
    if(f=="")
    {
      check=false;
      $("#address_msg").html("Enter your address");
    }
    else
    {
      $("#address_msg").html("");
    }

    if(x==false && y==false)
    {
      check=false;
      $("#gender_msg").html("Select Gender");
    }
    else
    {
      $("#gender_msg").html("");
    }
    
    
    if($("#email_msg").html()=="")
    {
      check=true;
    }
    

    // var a = document.getELementById("full_name").value;
    return check;
  }); 
});
</script>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-primary">Signup Here</h4>
            </div>
            <div class="modal-body">
                <form action="save_sign.php" method="post" enctype="multipart/form-data"> 
	                	<div class="form-group">
	                		<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-user text-primary"></i></span>
								</div>
								<input type="text" placeholder="Name" id="full_name" name="full_name" class="form-control">
							</div>
							<p class="text-danger val_msg" id="full_name_msg"></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-envelope text-primary"></i></span>
								</div>
								<input type="text" placeholder="Email" id="email" onblur="check_username()" name="email" class="form-control">
							</div>
							<p class="text-danger val_msg" id="email_msg"></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-key text-primary"></i></span>
								</div>
								<input type="password" class="form-control" id="password" placeholder="Password" name="password">
								<div class="input-group-addon" onclick="myFunctionPass()">
									<span class="input-group-text"><i class="fa fa-eye text-success"></i></span>
								</div>
							</div>
								<p class="text-danger val_msg" id="password_msg"></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-key text-primary"></i></span>
								</div>
								<input type="password" placeholder="Confirm Password" id="con_pass" name="con_pass" class="form-control">
								<div class="input-group-addon" onclick="myFunctionCon()">
									<span class="input-group-text"><i class="fa fa-eye text-success"></i></span>
								</div>
							</div>
							<p class="text-danger val_msg" id="con_pass_msg"></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-phone text-primary"></i></span>
								</div>
								<input type="number" placeholder="Mobile Number" onblur="check_mobile()" id="mobile" name="mobile" class="form-control">
							</div>
							<p class="text-danger val_msg" id="mobile_msg"></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-venus-mars text-primary"></i></span>
								</div>
								<select name="gender" id="gender" class="form-control">
										<option>Select</option>
										<option value="male" id="male">Male</option>
										<option value="female" id="female">Female</option>
								</select>
							</div>
								<p class="text-danger val_msg" id="gender_msg"></p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="input-group-text"><i class="fa fa-address-card-o text-primary"></i></span>
								</div>
								<textarea placeholder="Address" id="address" name="address" class="form-control"></textarea>
							</div>
							<p class="text-danger val_msg" id="address_msg"></p>
						</div>
						<button type="submit" class="btn btn-success" id="submit" value="submit">submit</button>
						<p class="text-warning mt-4">Already have An Account ? <a href="login.php">Login</a></p>
				</form>
            </div>
        </div>
    </div>
</div>
</body>
</html>