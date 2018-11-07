<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
 $sql1 = "UPDATE bookings SET bookstatus='1' where bookid='$_POST[bookid]'";
if(mysqli_query($link,$sql1)){
	$sql2 = "UPDATE rooms SET availstatus='False' where room_id='$_POST[roomid]'";
	if(mysqli_query($link,$sql2)){
	$sql3 = "Select custid from bookings where bookid='$_POST[bookid]'";
	if(mysqli_query($link,$sql3)){
	$result=mysqli_query($link,$sql3);
	$row=mysqli_fetch_row($result);
	$sql4 = "UPDATE rooms SET occcustid='$row[0]' where room_id='$_POST[roomid]'";
		if(mysqli_query($link,$sql4)){
		echo "<script> alert('Your booking request is successful.We will inform you about thes status soon');</script>";
			header('Location:http://localhost/project/Allot.php');
		}
	}
	}
	}
else{
	echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}
mysqli_close($link);
?>
	