<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
 $sql = "INSERT INTO rooms(roomname,roomtypeid,roomrent) values ('$_POST[name]','$_POST[roomtype]','$_POST[rent]')";
if(mysqli_query($link,$sql)){
	//echo "Record edited sucessfully";
		echo "<script> alert('Your booking request is successful.We will inform you about thes status soon');</script>";
			header('Location:http://localhost/project/room.php');
	}
else{
	echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}
mysqli_close($link);
?>
