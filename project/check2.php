<?php
$link = mysqli_connect("localhost","root","","hotel_management");
if($link===false)
{
	die("ERROR:could not connect.".mysqli_connect_error());
}
$sql = "Select * from users where Password='$_POST[psw]' And Username='$_POST[uname]'";
if(mysqli_query($link,$sql)){
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($result);
	if(empty($row[0]))
	{
		//echo "Incorrect credentials";
		echo "<script> alert('Incorrect Credentials');window.history.go(-1);</script>";
	}
	else
	{
		if($row['status']==1)
		{
			session_start();
			$_SESSION['userid']=$row['UserId'];
			$_SESSION['usrname']=$row['Username'];
			$_SESSION['intime']=date_default_timezone_get();;
			$_SESSION['indate']=date("Y-m-d");
			$ent1=$_SESSION['userid'];
			$ent2=$_SESSION['usrname'];
			$ent3=$_SESSION['intime'];
			$ent4=$_SESSION['indate'];
			$sql3 = "INSERT INTO sessions(username,intime,userid,date) values ('$ent2','$ent3','$ent1','$ent4')";
	if(mysqli_query($link,$sql3)){
		//echo "Login successfull";
			echo "<script> alert('Login Successfull');</script>";
			header('Location:http://localhost/project/admin.php');
		}
		else
		{
	echo "urlo";
	echo "<script> alert('Your User Status is not yet Verified');window.history.go(-1);</script>";
		}
	}else header('Location:http://localhost/project/insert.php');
	}
}
else{
	echo "ERROR: could not able to execute $sql.".mysqli_error($link);
	}
mysqli_close($link);
?>
	