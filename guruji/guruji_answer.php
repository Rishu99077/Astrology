<?php
include("guruji_header.php");

if(isset($_GET['cust_id']))
{
  $cust_id = $_GET['cust_id'];
}
if(isset($_GET['que_id']))
{
  $que_id = $_GET['que_id'];
}

$query = "SELECT * FROM user_questions WHERE cust_id = $cust_id AND id = $que_id";
// print_r($query);
// exit();
$result = mysqli_query($conn , $query);

$data = mysqli_fetch_assoc($result);
?>
 <style type="text/css">   
     .radio-inline{
      margin: 0px 40px 20px 0px;
      cursor: pointer;
        }
        label{
          color: #000;
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
        	color: honeydew;
        }
        .user_detail
        {
          color: honeydew;
        }
        .btn-success
        {
        	  display: block;
			  border: none;
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 28px;
			  font-size: 16px;
			  cursor: pointer;
			  text-align: center;
			  margin-top: 20px;
        }
      </style>
			<!-- Main cob\ntent start -->
     <div class="container-fluid" style="min-height: 625px; background-image: url(../images/content/back3.jpg); background-repeat: no-repeat; background-size: 100% 900px;" >
            <div class="row">
                <div class="col-md-2"></div>
                   <div class="col-md-8">
                <h2 class="text-center mt-5 font-weight-bold">Answer Panel</h2>
                <h4 style="color: honeydew;">customer details</h4>
                <hr class="bg-white">

               
            		</div>
        	</div>
                <form action="save.php" class="mb-4" method="post">
                <div class="row">
                   <div class="col-md-2">
                     
              	</div>
                      <input type="hidden" name="cust_id" value="<?php echo $data['cust_id']; ?>">
                      <label class="col-md-4 user_detail">Cutomer's Name*<br>
                      <input id="text" class="font-weight-bold" value="<?php echo $data['full_name']; ?>" name="full_name" readonly ></label>  
                       <label class="col-md-4 user_detail">Category<br>
                      <input id="text" class="font-weight-bold" value="<?php echo $data['category']; ?>" name="category" readonly ></label>		
                      </label>      
              </div>
                  
              <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-4 user_detail">Date of Birth*<br>
                      <input type="date" class="font-weight-bold" id="text" name="date_of_birth" value="<?php echo $data['date_of_birth'] ?>" readonly ></label>
                      <label class="col-md-4 user_detail">Time of Birth*<br>
                  	  <input type="text" class="font-weight-bold" id="text" name="time_of_birth" value="<?php echo $data['time_of_birth'] ?>" readonly ></label>
 
              </div>
              <div class="row">
                  <div class="col-md-2"></div>
                  <label class="col-md-8 user_detail">Customer Question*<br>
                  <textarea id="message" class="font-weight-bold" name="question" limit="250" cols="48" rows="2"><?php echo $data['question']; ?></textarea></label>
       		  </div>
       		   <div class="row">
                  <div class="col-md-2"></div>
                  <label class="col-md-8 user_detail">Answer*<br>
                  <textarea id="message" required="" name="answer" limit="250" placeholder="Write your Answer here" cols="48" rows="5"></textarea></label>
                  <input type="hidden" name="ask_date_time" value="<?php echo $data['ask_date_time']; ?>">
       		  </div>
                       <div class="row">
                       <div class="col-md-4 offset-md-5 col-sm-12 col-xs-12 offset-4">
                       		<button class="btn btn-success font-weight-bold" type="submit">ANSWER</button>
                   	   </div>
                      </div>

                 </form>
            </div>

		 <!--MAin Content End  -->