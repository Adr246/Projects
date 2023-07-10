<?php
        
        
    //database connection

    $dbhost="localhost";
    $username="root";
    $password="";
    $dbname="bookstall";
    //create connection

    $conn = mysqli_connect($dbhost,$username,$password,$dbname);
    if(!$conn)
    {
           die("Connection Failed!".mysqli_error());
    }
    else
    {
        print("Connection Established Sucessfully!<br>");
            
    }
    //inserting to table
        
    $bname=$_POST['bname'];
    $author=$_POST['auth'];
    $price=$_POST['price'];
    $qty=$_POST['quant'];
    $date=$_POST['date'];

        
    $query = "INSERT INTO bookings (bookname,author,bookprice,quantity,dates) VALUES ('$bname', '$author', '$price', '$qty', '$date')";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        echo("Failed To Sent!<br>".mysqli_error($conn));
    }
    else
    {
        echo("Query Affected");
    }   

mysqli_close($conn);
    
        
?>
</body>
</html>