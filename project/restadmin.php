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
              <li><a href="admin.php" >Waiting Requests</a></li>
              <li><a href="room.php">Hotel Rooms</a></li>
              <li><a href="payments.php">Check Payments</a></li>
			   <li><a href="Allot.php">Allot Rooms</a></li>
			   <li><a href="Restaurant.php" class="current">Restaurant</a></li>
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
				$sql = "Select itemname,itemid,itemprice from item";
				if(mysqli_query($link,$sql)){
				$result=mysqli_query($link,$sql);
				//$row=mysqli_fetch_row($result);
				echo "
			<br/><style>
					table,th,td{
						font-color:#ffffff;
						 border:1px solid orange;
						 border-collapse:collapse;
					}
				</style>
				<h3>Menu</h3>
				<table style='width=100%;background-color:white;color:black;'>
				<th style='width=30px;'>
				<tr  style='background-color:gold;'>
					<th> Item id</th>
					<th> Item name</th>
					<th> Item price</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
				echo "
				<th style='width=30px;'>
				<tr>
					<th>$row[itemid]</th>
					<th>$row[itemname]</th>
					<th>$row[itemprice]</th>
				</tr>";
				}
				echo"</table>";
				echo '<br/>
				<hr/>
			<br/>
				<br/>
				<br/>
				<h3>Add Dishes:</h3>
            <form action="dishsub.php" method="POST" id="reservation-form" style="border:1px solid orange; padding:10px;">
			<fieldset>
                <div>
                  <label>Item name:</label>
                  <input type="text" name="name" size="35">
                </div>
				<br/>
                <div>
                  <label>Item Price(per serving):</label>
                  <input type="int" name="price" size="35">
                </div>
				<br/>
				<div>
				<br/>
                <div class="button"><button type="submit" style="background: rgb(219, 67, 43)"><span><span>Add Dish</span></span></button></div>          
			</fieldset>
			</form>
			<br/>';
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
				$sql = "Select * from foodorders";
				if(mysqli_query($link,$sql)){
				$result=mysqli_query($link,$sql);
				//$row=mysqli_fetch_row($result);
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
				<h3>Orders</h3>
				<table style='width=100%;background-color:white;color:black;'>
				<th style='width=30px;'>
				<tr  style='background-color:gold;'>
					<th> Order id</th>
					<th> Item id</th>
					<th> Customer id</th>
					<th> Order date</th>
					<th> Bill amount</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
				echo "
				<th style='width=30px;'>
				<tr>
					<th>$row[Orderid]</th>
					<th>$row[Itemid]</th>
					<th>$row[ordcustid]</th>
					<th>$row[Orderdate]</th>
					<th>$row[amount]</th>
				</tr>";
				}
				echo"</table>";
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
