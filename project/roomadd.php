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
              <li><a href="admin.php">Waiting Bookings</a></li>
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
 <!--hgfds-->
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
            <h3>Add Rooms:</h3>
            <form action="roomsub.php" method="POST" id="reservation-form">
              <fieldset>
                <div>
                  <label>Room name:</label>
                  <input type="text" name="name" size="35">
                </div>
				<br/>
                <div>
                  <label>Room rent(per day):</label>
                  <input type="int" name="rent" placeholder="Amount per day" size="35">
                </div>
				<br/>
				<div>
				<label>Room type</label>
                  <select name="roomtype">
					<option value="Discounted">Discounted Rooms</option>
					<option value="Business">Business Class Rooms</option>
					<option value="Premium">Premium Rooms</option>
					</select>
                </div>
				<br/>
                <div class="button"><button type="submit" style="background: rgb(219, 67, 43)"><span><span>Add room</span></span></button></div>
              </fieldset>
            </form>
          </div>
<!--ghfdfsd-->
      </div>
    </div>
  </div>
</div>
</body>
</html>
