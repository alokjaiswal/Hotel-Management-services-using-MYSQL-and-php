<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title> Hotel Exotic Spices</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<link href="ie_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');</script>
<![endif]-->
</head>
<body id="page1" onload="new ElementMaxHeight();">
<div id="main">
  <!-- header -->
  <div id="header">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="#">Exotic Homes</a></h1>
          <em>Hotel</em> <strong>An Escape From Your Lives</strong> </div>
      </div>
    </div>
    <div class="row-2">
      <div class="indent">
        <!-- header-box begin -->
        <div class="header-box">
          <div class="inner">
            <ul class="nav">
              <li><a href="#" class="current">Waiting Requests</a></li>
              <li><a href="room.php">Hotel Rooms</a></li>
              <li><a href="payments.php">Check Payments</a></li>
			   <li><a href="Allot.php">Allot Rooms</a></li>
			   <li><a href="restadmin.php">Restaurant</a></li>
			   <li><a href="logout.php">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
	  <!-- header-box end -->
    </div>
  </div>
  <!-- content -->
<br/> 
 <div id="content">
    <!--<div class="wrapper">
      <div class="form">
        <!-- box begin -->
        <div class="box maxheight">
          <div class="inner">
		  	<div>
		<?php
			$link = mysqli_connect("localhost","root","","hotel_management");
			if($link===false)
			{
				die("ERROR:could not connect.".mysqli_connect_error());
			}
				echo "<h3>You are logged in as ";
				session_start();
				$ent=$_SESSION['usrname'];
				echo "$ent</h3>";
			mysqli_close($link);
		?>
		</div>
			<hr/>
			<br/>
         <?php
				$link = mysqli_connect("localhost","root","","hotel_management");
				if($link===false)
				{
					die("ERROR:could not connect.".mysqli_connect_error());
				}
				$sql = "Select * from bookings where bookstatus=0";
				if(mysqli_query($link,$sql)){
				$result=mysqli_query($link,$sql);
				echo "<style>
					table,th,td{
						font-color:#ffffff;
						 border:1px solid orange;
						 border-collapse:collapse;
					}
				</style>
				<h3>Bookings Pending</h3>
				<br/>
				<table style='width=100%;background-color:white;color:black;'>
				<th style='width=20px;'>
				<tr style='background-color:gold;'>
					<th>Bookid</th>
					<th>Check in</th>
					<th>Check out</th>
					<th>Booking status </th>
					<th>Customer id</th>
					<th>Room type</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
				echo "
				<th style='width=20px;'>
				<tr>
					<th>$row[bookid]</th>
					<th>$row[checkin]</th>
					<th>$row[checkout]</th>
					<th>$row[bookstatus]</th>
					<th>$row[custid]</th>
					<th>$row[roomtype]</th>
				</tr>";
				}
				echo"</table>";
				}
				else{
					echo "ERROR: could not able to execute $sql.".mysqli_error($link);
				}
				mysqli_close($link);
				?>
				<?php
				$link = mysqli_connect("localhost","root","","hotel_management");
				if($link===false)
				{
					die("ERROR:could not connect.".mysqli_connect_error());
				}
				$sql = "Select * from users where status=0";
				if(mysqli_query($link,$sql)){
				$result=mysqli_query($link,$sql);
				echo "<br/>
					<hr/>
					<br/>
				<style>
					table,th,td{
						font-color:#ffffff;
						 border:1px solid orange;
						 border-collapse:collapse;
					}
				</style>
				<br/>
				<h3>Request Pending</h3>
				<br/>
				<table style='width=100%;background-color:white;color:black;'>
				<th style='width=20px;'>
				<tr style='background-color:gold;'>
					<th>User id</th>
					<th>Role</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Username</th>
					<th>status</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
				echo "
				<th style='width=20px;'>
				<tr>
					<th>$row[UserId]</th>
					<th>$row[Role]</th>
					<th>$row[UserMobile]</th>
					<th>$row[UserEmail]</th>
					<th>$row[Username]</th>
					<th>$row[status]</th>
				</tr>";
				}
				echo"</table>";
				echo '
				<br/>
					<hr/>
					<br/>
				<br/>
				<h3>Enter id of User whose Registration is Confirmed</h3>
            <form action="usersub.php" method="POST" id="reservation-form" style="padding:10px; border:1px solid orange;">
                <div>
                  <label>User id</label>
					<input type="int" name="userid" size="35">
                </div>
				<br/>
				<div>
				<br/>
                <div class="button"><button type="submit" style="background: rgb(219, 67, 43)"><span><span>Confirm Registartion</span></span></button></div>          
			</form>';
				}
				else{
					echo "ERROR: could not able to execute $sql.".mysqli_error($link);
				}
				mysqli_close($link);
				?>
          </div>
        <!--</div>
        <!-- box end -->
      </div>
    </div>
  </div>
</div>
</body>
</html>
