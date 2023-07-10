
<html>
<head>
<title>USERTABLE CREATION</title>
</head>


<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname,3308);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE USER_TABLE(stdid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
stdname VARCHAR(30) NOT NULL,
ph VARCHAR(30) NOT NULL,
email VARCHAR(50)NOT NULL,
sem VARCHAR(15),
course VARCHAR(15),
batch  VARCHAR(50))";

if (mysqli_query($conn,$sql)) {
    echo "Table for USER created successfully";
} else {
    echo "Error IN creating USER  table: " . $conn->error;
}

$conn->close();
?>
</body>

</html>
