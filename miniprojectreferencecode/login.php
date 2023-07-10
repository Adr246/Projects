<?php
session_start();

$user_name = $_POST['uname'];                                   //filter_var($_REQUEST['uname'],FILTER_SANITIZE_STRING);	
$pwd = $_POST['pwd'];
$enc_pwd = md5($pwd);
$con = mysqli_connect("localhost","root","","library_management");
$query = "select * from admin_login where email = '$user_name' AND password = '$enc_pwd'";
$res = mysqli_query($con,$query);
$result = mysqli_fetch_array($res);

if($result)
{
	$_SESSION["login_user"] = $result["name"];
	$_SESSION["mob"] = $result["phone"];
	header("location:view_user.php");
}
else
{
	header("location:index.php");
}
?>