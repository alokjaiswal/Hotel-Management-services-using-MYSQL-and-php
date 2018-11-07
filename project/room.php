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
              <li><a href="admin.php">Waiting Requests</a></li>
              <li><a href="#" class="current">Hotel Rooms</a></li>
              <li><a href="payments.php">Check Payments</a></li>
			   <li><a href="Allot.php">Allot Rooms</a></li>
			   <li><a href="restadmin.php">Restaurant</a></li>
			   <li><a href="logout.php">Log Out</a></li>
            </ul>
          </div>
        </div>
        <!-- header-box end -->
      </div>
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
				$sql = "Select * from rooms";
				if(mysqli_query($link,$sql)){
				$result=mysqli_query($link,$sql);
				echo "<style>
					table,th,td{
						font-color:#ffffff;
						 border:1px solid orange;
						 border-collapse:collapse;
					}
				</style>
				<h3>Rooms</h3>
				<br/>
				<table style='width=100%;background-color:white;color:black;'>
				<th style='width=20px;'>
				<tr style='background-color:gold;'>
					<th>Room id</th>
					<th>Room Name</th>
					<th>Room type</th>
					<th>Room Rent</th>
					<th>Availability</th>
					<th>Customer Occupied</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
				echo "
				<th style='width=20px;'>
				<tr>
					<th>$row[room_id]</th>
					<th>$row[roomname]</th>
					<th>$row[roomtypeid]</th>
					<th>$row[roomrent]</th>
					<th>$row[availstatus]</th>
					<th>$row[occcustid]</th>
				</tr>";
				}
				echo"</table>";
				}
				else{
					echo "ERROR: could not able to execute $sql.".mysqli_error($link);
				}
				mysqli_close($link);
				?>
				<br/>
				 <button style="background: rgba(180,0,0,1)"><a href="roomadd.php"><span><span>Add Rooms</span></span></a></button>
          </div>
        <!--</div>
        <!-- box end -->
      </div>
    </div>
  </div>
</div>
</body>
</html>
