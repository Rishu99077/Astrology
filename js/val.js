
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
    })
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
        // $("#username_msg").html("");

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
