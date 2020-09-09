<script>
var check = true;
    $(document).ready(function()
    {
      $("#submit").click(function()
      {
       var a = $("#full_name").val();
       var b = $("#email").val();
       var c = $("#password").val();
       var d = $("#con_pass").val();
       var e = $("#mobile").val();
       var f = $("#gender").val();
       var g = $("#address").val();

  if(a=="")
  {
    check=false;
    $("#full_name_msg").html("Insert your full name");
  }
  else
  {
    $("#full_name_msg").html("");
  }

  if(b=="")
  {
    check=false;
    $("#email_msg").html("Insert your email id");
  }
  else
  {
   	$("#email_msg").html("");
  }

  if(c=="")
  {
    check=false;
    $("#password_msg").html("insert your password");
  }
  else
  {
    $("#password_msg").html("");
  }

  if(d=="")
  {
    check=false;
    $("#con_pass_msg").html("insert your confirm password");
  }
  else
  {
    $("#con_pass_msg").html("");
			if(d != c)
			{
				check=false;
				$("#con_pass_msg").html("Password and confirm-Password not Same");
			}
			else
			{
				$("#con_pass_msg").html("");
			}
  }

  if(e=="")
  {
    check=false;
    $("#mobile_msg").html("insert your mobile Number");
  }
  else
  {
    $("#mobile_msg").html("");
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
   $("#gender_msg").html("insert your gender");
  }
  else
  {
   $("#gender_msg").html("");
  }

   if(g=="")
  {
    check=false;
    $("#address_msg").html("insert your Address");
  }
  else
  {
    $("#address_msg").html("");
  }

    return check;
  });
});
</script>
