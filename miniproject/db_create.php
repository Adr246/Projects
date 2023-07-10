<?php

 $dbhost='localhost';
 $dbuser='root';
 $dbpass='';
 $dbname='';

 $conn=mysqli_connect($dbhost,$dbuser,$dbpass);
 if(!$conn)
 {
    die("Connection Failed".$conn->connect_error());
 }
 else
 {
    echo("Connection Succesfull!");
 }

 $qry="create database reg_db";

 $result=mysqli_query($conn,$qry);

 if(!$result)
 {
    echo("Error Detected".$result->mysqli_error());
 
 }

 else

 {
    echo("Query Affected!");
 }

?>