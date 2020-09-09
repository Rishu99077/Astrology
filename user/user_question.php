<?php
include("user_header.php");
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
        	color: navy;
        }
        .user_detail
        {
          color: blue;
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
        /*.btn{
         margin-bottom: 20px;
          margin-left: 20px;
          background-color: #141452;
        }*/
      </style>
			<!-- Main cob\ntent start -->
     <div class="container-fluid" style="min-height: 625px; background-image: url(../images/content/back1.jpg); background-repeat: no-repeat; background-size: 100% 900px;" >
            <div class="row">
                <div class="col-md-2"></div>
                   <div class="col-md-8">
                <h2 class="text-center mt-5 font-weight-bold">Ask your Question</h2>
                <hr class="bg-white">

               
            		</div>
        	</div>
                <form action="save_question.php" class="mb-4" method="post">
                <div class="row">
                   <div class="col-md-2">
                     
              	</div>
                      <input type="hidden" name="cust_id" value="<?php echo $data['id']; ?>">
                      <label class="col-md-4 user_detail">Your Name*<br>
                      <input id="text" class="font-weight-bold" value="<?php echo $data['full_name']; ?>" name="full_name" readonly ></label>
                      <label class="col-md-4 user_detail">Your Email*<br>
                      <input id="text" class="font-weight-bold" value="<?php echo $data['email']; ?>" name="email" readonly></label> 
                      
              </div>
                    <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-4 user_detail">Your Phone<br>
                      <input id="text" class="font-weight-bold" name="mobile" value="<?php echo $data['mobile']; ?>" readonly></label>
                       <label class="col-md-4 user_detail">Category<br>
                      	<select name="category" id="text" required>
                      		<option>Select</option>
                      		<option>HOROSCOPE</option>
                      		<option>NUMEROLOGY</option>
                      		<option>BIRTH</option>
                      		<option>JANAM KUNDLI</option>
                      		<option>VASTUDOSH</option>
                      		<option>LOVE REMEDIES</option>
                      	</select>
                      </label>
                      
              </div>
              		<div class="row">
                      <div class="col-md-2"></div>
                     <label class="col-md-4 user_detail">Date of Birth*<br>
                      <input type="date" id="text" required="" name="dob"></label>
                      <label class="col-md-4 user_detail">Time of Birth*<br>
                      	<input type="time" id="text" required="" name="time">
                      	<input type="hidden" name="date">
                      </label>
              </div>
                    <div class="row">
                      <div class="col-md-2"></div>
                      <label class="col-md-8 user_detail">Ask your question here / यहां अपना प्रश्न पूछें*<br>
                      <textarea id="message" required="" name="question" limit="250" placeholder="Write your question here" cols="48" rows="5"></textarea></label>
                </div>
                       <div class="row">
                       <div class="col-md-4 offset-md-5 col-sm-12 col-xs-12 offset-4">
                       		<button class="btn btn-success font-weight-bold" type="submit">Ask / पूछें</button>
                   	   </div>
                      </div>

                 </form>
            </div>

		 <!--MAin Content End  -->
</body>

</html>