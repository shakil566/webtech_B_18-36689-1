<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:home.html");
	
}

else{
	header("location:home.html");
}

 ?>