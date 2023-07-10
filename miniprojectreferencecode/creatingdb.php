
<?php
$dbhost = 'localhost';
$dbuser ='root';
//$port for mysql=3308;
$conn = mysqli_connect($dbhost, $dbuser, "","",3308);
 if($conn->connect_error){
	 
		 die("connection failed".$conn->connect_error);
		 
	 }
	else
	{
		 echo "connected successfully <br>";
	}

$dbname = 'library_management';
$database = "CREATE DATABASE ".$dbname;
if($conn->query($database)===TRUE)
{
	echo("database created successfully............");
}
else
{
	echo "error in db creation".$conn->error;
}

/*$conn = mysqli_connect($dbhost, $dbuser, "",$dbname,3308);

	// sql to create table
$sql = "CREATE TABLE BCA(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
SALARY INT(6),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
Designation VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP 
DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/

$conn->close();
?>
		 
