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
              <li><a href="room.php">Hotel Rooms</a></li>
              <li><a href="#"  class="current">Check Payments</a></li>
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
				$sql = "Select * from customers";
				if(mysqli_query($link,$sql)){
				$result=mysqli_query($link,$sql);
				echo "<style>
					table,th,td{
						font-color:#ffffff;
						 border:1px solid orange;
						 border-collapse:collapse;
					}
				</style>
				<h3>Customers</h3>
				<br/>
				<table style='width=100%;background-color:white;color:black;'>
				<th style='width=20px;'>
				<tr  style='background-color:gold;'>
					<th>Customer id</th>
					<th>Customer name</th>
					<th>Customer email</th>
					<th>Customer mobile</th>
					<th>No of guests</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
				echo "
				<th style='width=20px;'>
				<tr>
					<th>$row[cusid]</th>
					<th>$row[cusname]</th>
					<th>$row[custemail]</th>
					<th>$row[cusmobile]</th>
					<th>$row[noofguest]</th>
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
				<br/>
				<?php
				$link = mysqli_connect("localhost","root","","hotel_management");
				if($link===false)
				{
					die("ERROR:could not connect.".mysqli_connect_error());
				}
				$sql = "Select * from payments";
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
				<h3>Payments</h3>
				<br/>
				<table style='width=100%;background-color:white;color:black;'>
				<th style='width=20px;'>
				<tr style='background-color:gold;'>
					<th>Payment id</th>
					<th>Restaurant amount</th>
					<th>Room Rent</th>
					<th>Customer id</th>
					<th>Customer name</th>
					<th>Total after Discount</th>
					<th>Payment status</th>
					<th>Payment Method</th>
				</tr>";
				while($row=mysqli_fetch_assoc($result))
				{
					$sql4="Select cusname from customers where cusid='$row[paycustid]'";
					$result4=mysqli_query($link,$sql4);
					$row4=mysqli_fetch_row($result4);
				echo "
				<th style='width=20px;'>
				<tr>
					<th>$row[payid]</th>
					<th>$row[Restamt]</th>
					<th>$row[Rentamt]</th>
					<th>$row[paycustid]</th>
					<th>$row4[0]</th>
					<th>$row[Total]</th>
					<th>$row[paystat]</th>
					<th>$row[Method]</th>
				</tr>";
				}
				echo"</table>";
				}
				else{
					echo "ERROR: could not able to execute $sql.".mysqli_error($link);
				}
				echo '<br/>
					<hr/>
					<br/>
				<br/>
				<br/>
				<h3>Enter id of customer whose payment is settled</h3>
            <form action="paydone.php" method="POST" id="reservation-form" style="padding:10px; border:1px solid orange;">
                <div>
                  <label>Customer id</label>
					<input type="int" name="custid" size="35">
                </div>
				<br/>
                <div>
                  <label>Payment Option</label>
                  <select name="method">
				  <option value="Cash">Cash</option>
				  <option value="Credit_Card">Credit card</option>
				  <option value="Debit_Card">Debit card</option>
				  <option value="Paytm">Paytm</option>
				  <option value="Other_Ewallets">Other E-Wallets</option>
				  </select>
                </div>
				<br/>
				<div>
				<br/>
                <div class="button"><button type="submit" style="background: rgb(219, 67, 43)"><span><span>Settle Payment</span></span></button></div>          
			</form>';
			
				echo '<br/>
				<br/>
				<h3>Enter id of customer whose payment bill is to be generated</h3>
            <form action="paysub.php" method="POST" id="reservation-form" style="padding:10px; border:1px solid orange;">
                <div>
                  <label>Customer id</label>
					<input type="int" name="custid" size="35">
                </div>
				<br/>
                <div>
                  <label>Enter Discount Rate</label>
                  <input type="int" name="Rate" size="35">
                </div>
				<br/>
				<div>
				<br/>
                <div class="button"><button type="submit" style="background: rgb(219, 67, 43)"><span><span>Generate Bill</span></span></button></div>          
			</form>';
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
