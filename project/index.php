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
              <li><a href="index.php" class="current">Home page</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="User_login.php">Admin Login</a></li>
			   <li><a href="User_register.php">Register</a></li>
			   <li><a href="status.php">Check Status</a></li>
			   <li><a href="Restaurant.php">Restaurant</a></li>
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
            <h3>Booking:</h3>
            <form action="book.php" method="POST" id="reservation-form" style="padding:10px; border:1px solid orange">
              <fieldset>
                <div>
                  <label>Check In:</label>
                  <input type="date" name="checkin" size="35">
                </div>
				<br/>
                <div>
                  <label>Check Out:</label>
                  <input type="date" name="checkout" size="35">
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
				<div>
                  <label>Name</label>
                  <input type="text" placeholder="Enter name" name="Name" size="35">
                </div>
				<div>
                  <label>Email Id</label>
                  <input type="email" placeholder="Enter Email" name="email" size="35">
                </div>
				<div>
                  <label>Mobile</label>
                  <input type="int" placeholder="Enter mobile" name="mobile" size="35">
                </div>
				<div>
                  <label>Address</label>
                  <input type="text" placeholder="Enter Address" name="Address" size="135">
                </div>
				<br/>
                <div class="field"> Persons: &nbsp;
                  <input type="text" value="1"  name="noofgu"/>
				  <br/>
                </div>
				  <br/>
                <div class="button"><button type="submit" style="background: rgb(219, 67, 43)"><span><span>Book a room</span></span></button></div>
              </fieldset>
            </form>
          </div>
        <!--</div>
        <!-- box end -->
      </div>
	  </div>
  </div>
</div>
</body>
</html>
