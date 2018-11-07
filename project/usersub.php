<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
$sql = "Update users set status='1' where UserId='$_POST[userid]'";
if(mysqli_query($link,$sql)){
		//echo "Login successfull";
		echo "<script> alert('Login Successfull');</script>";
		header('Location:http://localhost/project/admin.php');
}
else{
	echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}
mysqli_close($link);
?>
	