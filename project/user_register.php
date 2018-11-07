<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
 background: rgba(254,215,164,1);
background: -moz-linear-gradient(top, rgba(254,215,164,1) 0%, rgba(255,163,71,1) 32%, rgba(255,131,15,1) 50%, rgba(252,217,176,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(254,215,164,1)), color-stop(32%, rgba(255,163,71,1)), color-stop(50%, rgba(255,131,15,1)), color-stop(100%, rgba(252,217,176,1)));
background: -webkit-linear-gradient(top, rgba(254,215,164,1) 0%, rgba(255,163,71,1) 32%, rgba(255,131,15,1) 50%, rgba(252,217,176,1) 100%);
background: -o-linear-gradient(top, rgba(254,215,164,1) 0%, rgba(255,163,71,1) 32%, rgba(255,131,15,1) 50%, rgba(252,217,176,1) 100%);
background: -ms-linear-gradient(top, rgba(254,215,164,1) 0%, rgba(255,163,71,1) 32%, rgba(255,131,15,1) 50%, rgba(252,217,176,1) 100%);
background: linear-gradient(to bottom, rgba(254,215,164,1) 0%, rgba(255,163,71,1) 32%, rgba(255,131,15,1) 50%, rgba(252,217,176,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fed7a4', endColorstr='#fcd9b0', GradientType=0 );
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
}
select {
	width: 40%;
	height: 40px;
}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 40%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

.registerbtn {
    background-color: #00D82B;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="insert.php" method="post">
<center>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to Register Yourself as a User</p>
    <hr>

    <label for="email"><b>Role Id</b></label>
    <br>
	<select name="role">
		<option value="Manager">Manager</option>
		<option value="Admin">Administrator</option>
		<option value="Chef">Restaurant Chef</option>
		<option value="Payment Person">Payment Accountant</option>
		<option value="Allocator">Rooms Alloting Head</option>
		</select>
	<br/>
	<br/>
	<label for="Username"><b>Username</b></label>
	<br>
    <input type="text" placeholder="Enter Username" name="Username" required>
<br>		
    <label for="Email"><b>Email</b></label>
    <br>
	<input type="email" placeholder="Enter Email" name="Email" required>
<br>
	<label for="Mobile"><b>Mobile Number</b></label>
    <br>
	<input type="text" placeholder="Enter Mobile Number" name="Mobile" required>
<br>
	<label for="Address"><b>Address</b></label>
    <br>
	<input type="text" placeholder="Enter Address" name="Address" required>
<br>	
    <label for="Password"><b>Password</b></label>
    <br>
	<input type="password" placeholder="Enter Password" name="Password" required>
<br>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already a User? <a href="User_login.php">Login</a>.</p>
  </div>
  </center>
</form>

</body>
</html>
