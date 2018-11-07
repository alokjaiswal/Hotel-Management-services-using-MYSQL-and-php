<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Hotel Exotic Spices| Services</title>
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
<body id="page2" onload="new ElementMaxHeight();">
<div id="main">
  <!-- header -->
  <div id="header" class="small">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="#">Exotic Homes</a></h1>
          <em>Hotel</em> <strong>An Escape From Your Lives</strong> </div>
      </div>
    </div>
    <div class="row-2 alt">
      <div class="indent">
        <!-- header-box-small begin -->
        <div class="header-box-small">
          <div class="inner">
            <ul class="nav">
              <li><a href="index.php">Home page</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="User_login.php">Admin Login</a></li>
			   <li><a href="User_register.php">Register</a></li>
			   <li><a href="status.php"  class="current">Check Status</a></li>
			   <li><a href="Restaurant.php">Restaurant</a></li>
            </ul>
          </div>
        </div>
        <!-- header-box-small end -->
      </div>
    </div>
  </div>
  <!-- content -->
  <br/>
  <div id="content">
    <div class="wrapper">
      <div class="content">
        <div class="indent">
		<div><!-- style="background: rgba(92,46,0,1);
background: -moz-linear-gradient(top, rgba(92,46,0,1) 0%, rgba(82,38,0,1) 0%, rgba(107,52,0,1) 38%, rgba(82,38,0,1) 70%, rgba(82,38,0,1) 83%, rgba(87,38,0,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(92,46,0,1)), color-stop(0%, rgba(82,38,0,1)), color-stop(38%, rgba(107,52,0,1)), color-stop(70%, rgba(82,38,0,1)), color-stop(83%, rgba(82,38,0,1)), color-stop(100%, rgba(87,38,0,1)));
background: -webkit-linear-gradient(top, rgba(92,46,0,1) 0%, rgba(82,38,0,1) 0%, rgba(107,52,0,1) 38%, rgba(82,38,0,1) 70%, rgba(82,38,0,1) 83%, rgba(87,38,0,1) 100%);
background: -o-linear-gradient(top, rgba(92,46,0,1) 0%, rgba(82,38,0,1) 0%, rgba(107,52,0,1) 38%, rgba(82,38,0,1) 70%, rgba(82,38,0,1) 83%, rgba(87,38,0,1) 100%);
background: -ms-linear-gradient(top, rgba(92,46,0,1) 0%, rgba(82,38,0,1) 0%, rgba(107,52,0,1) 38%, rgba(82,38,0,1) 70%, rgba(82,38,0,1) 83%, rgba(87,38,0,1) 100%);
background: linear-gradient(to bottom, rgba(92,46,0,1) 0%, rgba(82,38,0,1) 0%, rgba(107,52,0,1) 38%, rgba(82,38,0,1) 70%, rgba(82,38,0,1) 83%, rgba(87,38,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5c2e00', endColorstr='#572600', GradientType=0 );"-->
			<?php
				$link = mysqli_connect("localhost","root","","hotel_management");
				if($link===false)
				{
					die("ERROR:could not connect.".mysqli_connect_error());
				}
				$sql = "Select * from bookings,customers where custemail='$_POST[email]' And custid=cusid ";
				if(mysqli_query($link,$sql)){
				$result=mysqli_query($link,$sql);
				//$row=mysqli_fetch_row($result);
				echo "
				<style>
					table,th,td{
						font-color:#ffffff;
						 border:1px solid red;
						 border-collapse:collapse;
					}
				</style>
				<table style='width=100%;'>
				<th style='width=30px;'/>
				<tr>
					<th>Bookid</th>
					<th>Booking status </th>
					<th>Customer Name</th>
					<th>Check In</th>
					<th>Check Out</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
					$ent11 = $row['bookid'];
					$ent22 = $row['bookstatus'];
					$ent33 = $row['cusname'];
					$ent44 = $row['checkin'];
					$ent55 = $row['checkout'];
				echo "
				<th style='width=20px;'>
				<tr>
					<th>$ent11</th>
					<th>$ent22</th>
					<th>$ent33</th>
					<th>$ent44</th>
					<th>$ent55</th>
				</tr>";
				}
				echo "</table>";
				}
				else{
					echo "ERROR: could not able to execute $sql.".mysqli_error($link);
				}
				mysqli_close($link);
				?>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
</div>
</body>
</html>
