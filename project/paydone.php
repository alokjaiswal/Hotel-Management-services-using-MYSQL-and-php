<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
 $sql1 = "Update payments Set paystat='Paid' where paycustid='$_POST[custid]'";
if(mysqli_query($link,$sql1)){
		session_start();
		$ent=$_SESSION['userid'];
		$sql3 = "Update payments Set RecvrId='$ent' where paycustid='$_POST[custid]'";
		if(mysqli_query($link,$sql3)){
		$sql2 = "Update payments Set Method='$_POST[method]' where paycustid='$_POST[custid]'";
		
		if(mysqli_query($link,$sql2))
		{
			echo "<script> alert('Payment Settled.');</script>";
			header('Location:http://localhost/project/payments.php');
		}
		}
}
else{
	echo "ERROR: could not able to execute $sql1.".mysqli_error($link);
	}
mysqli_close($link);
?>
	