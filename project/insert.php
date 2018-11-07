<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
 $sql = "INSERT INTO users(Role,Username,UserAddress,UserEmail,UserMobile,Password) values ('$_POST[role]','$_POST[Username]','$_POST[Address]','$_POST[Email]','$_POST[Mobile]','$_POST[Password]')";
if(mysqli_query($link,$sql)){
	//echo "Record edited sucessfully";
	echo "<script> alert('Registration Complete.Login Now');</script>";
		header('Location:http://localhost/project/User_login.php');
	}
else{
	echo "ERROR: could not able to execute $sql.".mysqli_error($link);
		header('Location:http://localhost/project/user_register.php');
	}
mysqli_close($link);
?>
	
	
