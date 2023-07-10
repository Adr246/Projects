<?php
session_start();
if(!isset($_SESSION["login_user"]) && !isset($_SESSION["mob"]))
{
	header("location:index.php");
}
?>
<html>
<body>

<div style="width:25%;float:left;min-height:600px;background-color:#B9B9B9;text-align:center;">
	<a href="logout.php">Logout</a><br>
</div>

<div style="width:75%;float:left;min-height:600px;">
<h3 style="text-align:center;">View Books</h3>
<?php
  $con=mysqli_connect("localhost","root","","library_management");

  $sql = "select * from user_table";
  $res_array = mysqli_query($con,$sql);
  
  echo '<table cellspacing="1" cellpadding="2" border="1">
			<tr>
				<th>stdID</th>
				<th>studName</th>
				<th>phone</th>
				<th>email</th>
				<th>sem</th>
				<th>course</th>
				<th>batch</th>
				
				
			</tr>';
			
			
			
			
			
			/*if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["empid"]. " - Name: " . $row["empname"]. " " . "your salary is ".$row["empsalary"]. "<br>";
    }
}
 else {
    echo "0 results";
}*/



  while($result = mysqli_fetch_array($res_array))
  {
	  //$bookid = $result["id"];
		 echo '<tr>';
		 	echo '<td>'.$result["stdid"].'</td>';
		    echo '<td>'.$result["stdname"].'</td>';
			echo '<td>'.$result["ph"].'</td>';
			echo '<td>'.$result["email"].'</td>';
			echo '<td>'.$result["sem"].'</td>';
			echo '<td>'.$result["course"].'</td>';
			echo '<td>'.$result["batch"].'</td>';
			
			//echo '<td><a href="edit_book.php?book_id='.$bookid.'">Edit</a></td>';
		 echo '</tr>';
  }
  echo '</table>';

?>
</div>
</body>
</html>







