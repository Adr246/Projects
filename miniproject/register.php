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
        $dbname="reg_db";
        //create connection

        $conn = mysqli_connect($dbhost,$username,$password,$dbname);
        if(!$conn)
        {
            die("Connection Failed!".$conn->connect_error);
        }
               
        //inserting to table
        
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $mail=$_POST['mail'];
        $ph=$_POST['phone'];
        $pass=$_POST['passwd'];
        $enc_pass=MD5($pass);
        
        $query = "INSERT INTO user_info (firstname, lastname, email, phone, passwd) VALUES ('$fname', '$lname', '$mail', '$ph', '$enc_pass')";
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