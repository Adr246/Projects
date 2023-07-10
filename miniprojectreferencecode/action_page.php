<?php
//date_default_timezone_set('Asia/Kolkata');

  $stdid = $_POST['stdid'];
  $stdname = $_POST['stdname'];
  $phone = $_POST['ph'];
  $email = $_POST['email'];
  $sem = $_POST['sem'];
  $course = $_POST['course'];
  $batch= $_POST['batch'];
 
  //$current_time = date("Y-m-d H:i:s");
  
  $con=mysqli_connect("localhost","root","","library_management",3308);
if($stdid!="" && $phone!="")
{
 $qry = "insert into user_table ADMIN_LOGIN(id ,name,password,email,phone,status)values('$stdid','$stdname','$phone','$email','$sem','$course',' $batch')";
  $res = mysqli_query($con,$qry);
  
  if($res)
  {
	  echo 'USER DETAILS STORED Successfully';
  }
  else
  {echo 'Submit Failed';
	  
  }
}
else
{
	echo "ceratin fields cannot be empty enter mandatory fields";
}

?>
