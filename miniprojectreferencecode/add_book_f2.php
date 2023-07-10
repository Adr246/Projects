<html>
<body>

<h2>ADD BOOK</h2>
<img src ="books.jpg" height ="300" alt="300"/>

<p><strong>U CAN ADD BOOK HERE..................</strong> </p>

<form action="submit.php" method="post">

  <label for="Bname">BOOK NAME</label><br>
  <input type="text" id="Bname" name="Bname" style="width:300px;"><br>
  
  
  <label for="auth">author :</label><br>
  <input type="text" id="auth" name="auth" style="width:300px;"><br>
  
  
  <label for ="price">PRICE:</label><br><br>
  <input type ="number" id ="price" name ="price"><br>
  
  <label for="edition">Edition :</label><br>
  <input type="text" id="edition" name="edition"><br>
  
  <label for="publication">Publication :</label><br>
  <input type="text" id="publication" name="publication"><br>
  
  <label for="qty">QUANTITY:</label><br>
  <input type="number" id="qty" name="qty"><br>
  
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



