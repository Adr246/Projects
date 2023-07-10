<?php

  $con=mysqli_connect("localhost","root","","library_management",3308);

  $qry = "select * from books";
  $res_array = mysqli_query($con,$qry);
  
  echo '<table cellspacing="1" cellpadding="2" border="1">
			<tr>
				<th>ID</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>Book Price</th>
				<th>Quantity</th>
				<th>Edition</th>
				<th>Publication</th>
				<th>Status</th>
				<th></th>
			</tr>';
  while($result = mysqli_fetch_array($res_array))
  {
	  $bookid = $result["id"];
		 echo '<tr>';
		 	echo '<td>'.$result["id"].'</td>';
		    echo '<td>'.$result["book_name"].'</td>';
			echo '<td>'.$result["author"].'</td>';
			echo '<td>'.$result["book_price"].'</td>';
			echo '<td>'.$result["quantity"].'</td>';
			echo '<td>'.$result["edition"].'</td>';
			echo '<td>'.$result["published_by"].'</td>';
			echo '<td>'.$result["status"].'</td>';
			echo '<td><a href="edit_book.php?book_id='.$bookid.'">Edit</a></td>';
		 echo '</tr>';
  }
  echo '</table>';

?>
<br><br>
