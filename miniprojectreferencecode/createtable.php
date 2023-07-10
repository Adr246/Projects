<html>
<head>
<title>Untitled Document</title>
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
$sql = "CREATE TABLE ADMIN_LOGIN(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
password  VARCHAR(30),
email VARCHAR(50),
phone VARCHAR(15),
status  VARCHAR(50))";

if (mysqli_query($conn,$sql)) {
    echo "Table  ADMIN LOGIN created successfully";
} else {
    echo "Error IN creating ADMIN LOGIN  table: " . $conn->error;
}

$conn->close();
?>
</body>
</html>