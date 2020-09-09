<?php
include("user_header.php");
?>

	<style type="text/css">   
     .radio-inline{
      margin: 0px 40px 20px 0px;
      cursor: pointer;
        }
        label
        {
          font-size: 15px;
          font-weight: 500;
        }
        .label label{
          color: #000;
          font-size: 25px;
          font-weight: 600;

        }
        #text{
          height: 40px;
          border-radius: 5px;
          padding-left: 10px;
          font-size: 14px;
          border: none;
          width: 100%;
          color:#000;
        }
        #message{
          outline: none;
          border: none;
          padding: 10px 0px 0px 15px;
          font-size: 16px;
          color: #000;
          border-radius: 5px;
          width: 100%;
        }
        .text-center
        {
          color: #ff700b;
        }
        .user_detail
        {
          color: #ff700b;
        }
 </style>



<!-- Main content start -->

<div class="container-fluid" style="height:630px; background-image: url(../images/content/galaxy.jpeg); background-repeat: no-repeat; background-size: 100% 1300px;">
             <div class="row">
                <div class="col-md-2"></div>
                   <div class="col-md-8">
                <h1 class="text-center mt-4 font-weight-bold">Feedback</h1>
                <hr class="bg-white">
                <h6 class="text-center">Please write your feedback below:</h6>
                <h3 class ="text-center mt-4">how do you rate your overall experience</h3>

                <form action="save_feedback.php" method="post">
            </div>
        </div>
                <div class="row">
                   <div class="col-md-2">
                     
              </div>
                      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                      <label class="col-md-4 user_detail">Full Name*<br>
                      <input readonly id="text" name="full_name" class="font-weight-bold" value="<?php echo $data['full_name']; ?>" placeholder="Name"></label>
                      <label class="col-md-4 user_detail">Email*<br>
                      <input readonly id="text" class="font-weight-bold" name="email" value="<?php echo $data['email']; ?>" placeholder="Email"></label>
                      <input type="hidden" name=""> 
                      
              </div>
                    <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-4 user_detail">Phone<br>
                      <input readonly id="text" class="font-weight-bold" name="mobile" value="<?php echo $data['mobile']; ?>" placeholder="Mobile Number"></label>
                      <label class="col-md-4 user_detail">Age*<br>
                      <input type="number" id="text" required="" name="age" placeholder="Enter your age..."></label>
              </div>
                    <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-8 user_detail">Message*<br>
                      <textarea id="message" required="" name="message" placeholder="Write your message here" cols="48" rows="5"></textarea></label>
                </div>
                <center class="label">
                  <label class="radio-inline text-center text-danger">
                      <input type="radio" required name="experience" value="bad"> Bad<i class="fas fa-frown" aria-hidden="true"></i>
                  </label>
                  <label class="radio-inline text-center text-warning">
                    <input type="radio" required name="experience" value="avg"> Average<i class="fas fa-meh-blank" aria-hidden="true"></i>
                  </label>
                  <label class="radio-inline text-center text-success">
                    <input type="radio" required name="experience" value="good"> Good<i class="fas fa-grin" aria-hidden="true"></i>
                  </label>
              </center>
                       <div class="row">
                       <div class="col-md-2 offset-md-3 col-sm-12 offset-sm-6"></div>
                       <center><button class="btn btn-warning center" style="margin-left: 40px;">Submit</button></center>
                      </div>

                 </form>
            </div>
			
			
<!-- main content End -->
		
		</div>
	</div>

	

</body>

</html>