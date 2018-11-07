<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
$sql0 = "select * from customers";
if(mysqli_query($link,$sql0)){
$result0=mysqli_query($link,$sql0);
$flag = 0;
if($result0)
{
	while($row0=mysqli_fetch_assoc($result0))
	{
		if($row0['custemail']==$_POST['email']){
			$flag=1;
		echo "reched";}
	}
}
if($flag ==0)
 $sql1 = "INSERT INTO customers(Custadd,custemail,cusname,cusmobile,noofguest) values ('$_POST[Address]','$_POST[email]','$_POST[Name]','$_POST[mobile]','$_POST[noofgu]')";
if(mysqli_query($link,$sql1)){
	//echo "Record edited sucessfully";
	$sql3="SELECT cusid FROM customers WHERE custemail='$_POST[email]'";
	$result=mysqli_query($link,$sql3);
$row=mysqli_fetch_row($result);
}else {
	//$sql1="SELECT cusid FROM customers WHERE custemail='$_POST[email]' And cusname='$_POST[Name]' And cusmobile='$_POST[mobile]'";
$sql1 = "select * from customers";
$sql3="SELECT cusid FROM customers WHERE custemail='$_POST[email]'";
	$result=mysqli_query($link,$sql3);
$row=mysqli_fetch_row($result);}
	if(strtotime($_POST[checkin]) < strtotime($_POST[checkout]) && strtotime($_POST[checkin]) > strtotime(date("Y/m/d")))
	$sql2 = "INSERT INTO bookings(custid,checkin,checkout,roomtype) values ('$row[0]','$_POST[checkin]','$_POST[checkout]','$_POST[roomtype]')";
else  header('Location:http://localhost/project/index.php');
	if(mysqli_query($link,$sql2)){
		echo "<script> alert('Your booking request is successful.We will inform you about thes status soon');</script>";
			header('Location:http://localhost/project/status.php');
	}
	}
else{
	echo "ERROR: could not able to execute $sql1.".mysqli_error($link);
	}
mysqli_close($link);
?>
	