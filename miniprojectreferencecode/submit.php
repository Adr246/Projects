<?php
date_default_timezone_set('Asia/Kolkata');

  $bookname = $_POST['Bname'];
  $author = $_POST['auth'];
  $price = $_POST['price'];
  
  $edition = $_POST['edition'];
  $publication = $_POST['publication'];
  
  $qty = $_POST['qty'];
  $status = $_POST['status'];
  $current_time = date("Y-m-d H:i:s");
  
  $con=mysqli_connect("localhost","root","","library_management",3308);

  $qry = "insert into books(book_name,author,book_price,quantity,edition,published_by,status,last_updated_date)values('$bookname','$author','$price','$qty','$edition','$publication', '$status','$current_time')";
  $res = mysqli_query($con,$qry);
  
  if($res)
  {
	  echo 'Book added Successfully';
  }
  else
  {echo 'Submit Failed';
	  
  }

?>
