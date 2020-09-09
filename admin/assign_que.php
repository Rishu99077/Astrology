<?php
include('../conn.php');
if(isset($_POST)==true)
{
$id        = $_POST['guru_id'];
$assign_id = $_POST['guru_id'];
$question_id = $_POST['question_id'];
		
 
$query = "UPDATE user_questions SET assign_id=$assign_id WHERE id=$question_id";

// print_r($query);
// exit();
}
mysqli_query($conn ,$query);
header("Location: cust_question.php");

?>