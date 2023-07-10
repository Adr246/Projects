<?php

    $dbhost='localhost';
    $dbuser='root';
    $dbpass='';
    $dbname='reg_db';

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }
    
    $qry="CREATE TABLE user_info(id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname varchar(20),lastname varchar(20),email varchar(40) UNIQUE KEY,phone varchar(20) UNIQUE KEY,passwd varbinary(8000))";
    $result=mysqli_query($conn,$qry);

    if(!$result)
    {
        echo("Query Failed!");
    }

    else
    {
        echo("Query Affected!");
    }

?>