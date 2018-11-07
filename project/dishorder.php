<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
$sql1 = "Select cusid from customers where custemail='$_POST[email]' And cusname='$_POST[name]'";	
	$result=mysqli_query($link,$sql1);
	$row=mysqli_fetch_row($result);
	$date=date("Y-m-d");
	$sql2="Select itemprice from item where itemid='$_POST[dishid]'";
	$result2=mysqli_query($link,$sql2);
	$row2=mysqli_fetch_row($result2);
 $sql = "INSERT INTO foodorders(itemid,ordcustid,Orderdate,amount) values ('$_POST[dishid]','$row[0]','$date','$row2[0]')";
if(mysqli_query($link,$sql)){
	//echo "Record edited sucessfully";
		echo "<script> alert('Your Order is successfully placed.We will serve you soon');</script>";
			header('Location:http://localhost/project/Restaurant.php');
	}
else{
	echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}
mysqli_close($link);
?>
