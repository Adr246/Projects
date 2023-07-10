<html>
<body>
<?php
  $con=mysqli_connect("localhost","root","","library_management",3308);

  $qry = "select * from books where id = ".$_REQUEST['book_id'];
  $res_array = mysqli_query($con,$qry);
  $result = mysqli_fetch_array($res_array);
?>
<h2>Edit BOOK</h2>

<p><strong>U CAN EDIT BOOK HERE..................</strong> </p>

<form action="" method="post">
  <input type="hidden" name="bookid" value="<?php echo $_REQUEST['book_id'];?>">
  <label for="Bname">BOOK NAME</label><br>
  <input type="text" id="Bname" name="Bname" style="width:300px;" value="<?php echo $result["book_name"];?>"><br>
  
  
  <label for="auth">author :</label><br>
  <input type="text" id="auth" name="auth" style="width:300px;" value="<?php echo $result["author"];?>"><br>
  
  
  <label for ="price">PRICE:</label><br><br>
  <input type ="number" id ="price" name ="price" value="<?php echo $result["book_price"];?>"><br>
  
  <label for="edition">Edition :</label><br>
  <input type="text" id="edition" name="edition" value="<?php echo $result["edition"];?>"><br>
  
  <label for="publication">Publication :</label><br>
  <input type="text" id="publication" name="publication" value="<?php echo $result["published_by"];?>"><br>
  
  <label for="qty">QUANTITY:</label><br>
  <input type="number" id="qty" name="qty" value="<?php echo $result["quantity"];?>"><br>
  
  <br>
  Status:
 <select name ="status">
     <option>Available</option>
     <option>Not available</option>
   </select>
<br><br>
  
  <input type="submit" value="submit">
</form>



</body>
</html>



