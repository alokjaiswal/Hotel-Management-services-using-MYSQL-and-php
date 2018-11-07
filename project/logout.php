<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
			session_destroy();
			echo "<script> alert('Logged Out Successfully.');</script>";
			header('Location:http://localhost/project/index.php');
mysqli_close($link);
?>
	