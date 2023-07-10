<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbhost="localhost";
        $username="root";
        $password="";
        $dbname="bookstall";
        
        $conn= mysqli_connect($dbhost,$username,$password,$dbname);
        
        if(!$conn)
        {
            echo("Connection Failed!".$conn->mysqli_error);
        }
        else
        {
            echo("Connection Established!");
        }
        
        $sql= "create table bookings(bookname varchar(60),author varchar(20),bookprice int,quantity int,dates date)";
        $res=mysqli_query($conn,$sql);
        if(!$res)
        {
            echo("Failed to sent!<br>".mysqli_error($conn));
        }
        else
        {
            echo("Query Affected!");
        
        }
    
        mysqli_close($conn);
    ?>


</body>
</html>

