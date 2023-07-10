<?php    
    session_start(); // always this has to be the first line
	session_unset();
    session_destroy();    

    header("location:index.php");
?>