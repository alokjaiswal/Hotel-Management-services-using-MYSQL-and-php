<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
 $sql = "Select bookid,bookstatus,cusname from bookings,customers where cusname='$_POST[Name]' And custemail='$_POST[email]' And custid=cusid ";
if(mysqli_query($link,$sql)){
	//echo "Record edited sucessfully";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_row($result);
	echo $row[0];
	echo $row[1];
	echo $row[2];
	}
else{
	echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}
mysqli_close($link);
?>
	