<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
 $sql5="Select * from bookings where custid='$_POST[custid]'";
 if(mysqli_query($link,$sql5)){
	  $result5=mysqli_query($link,$sql5);
 $row5=mysqli_fetch_array($result5);
 $sql1 = "Select roomrent From rooms where occcustid='$_POST[custid]'";
if(mysqli_query($link,$sql1)){
	//echo "Record edited sucessfully";
	$result1=mysqli_query($link,$sql1);
	$row1=mysqli_fetch_row($result1);
	$sql2="SELECT sum(amount) FROM foodorders where ordcustid='$_POST[custid]'";
	if(mysqli_query($link,$sql2)){
		$result2=mysqli_query($link,$sql2);
		$row2=mysqli_fetch_row($result2);
		$tym1=strtotime($row5['checkout']);
		$tym2=strtotime($row5['checkin']);
		$days=$tym1-$tym2;
		//echo $row5['checkout'];
		//echo $row5['checkin'];
		$days=$days/(60*60*24);
		//echo $days;
		$amt=$row1[0]*$days+$row2[0];
		echo $_POST['Rate'];
		$amt2=$amt*(100-$_POST['Rate'])/100;
		session_start();
		$ent1=$_SESSION['userid'];
		$sql3 = "INSERT INTO payments(Rentamt,Restamt,paycustid,Total,RecvrId) values ('$row1[0]','$row2[0]','$_POST[custid]','$amt2','$ent1')";	
	if(mysqli_query($link,$sql3)){
		echo "<script> alert('Your booking request is successful.We will inform you about thes status soon');</script>";
			header('Location:http://localhost/project/payments.php');
	}else echo "ERROR: could not able to execute $sql3.".mysqli_error($link);
	}else echo "ERROR: could not able to execute $sql2.".mysqli_error($link);
}
 }
else{
	echo "ERROR: could not able to execute $sql1.".mysqli_error($link);
	}
mysqli_close($link);
?>
	