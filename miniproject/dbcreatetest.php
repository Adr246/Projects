<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        //database connection

        $dbhost="localhost";
        $username="root";
        $password="";
        $dbname="test";
        //create connection

        $conn = mysqli_connect($dbhost,$username,$password,$dbname);
        if(!$conn)
        {
            die("Connection Failed!".mysqli_connect_error());
        }
        else
        {
            print("Connection Established Sucessfully!");
        }        
        
        //creating a database
        
        $sql="create database deleted";
        $result=mysqli_query($conn,$sql);
        if(!$result)
        {
            print("Error Creating Database");
        }
        else
        {
            print("Query Affected");
        }

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $mail=$_POST['mail'];
        $password=$_POST['passwd'];
        
    ?>
</body>
</html>