<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
	background: rgba(165,203,254,1);
	background: -moz-linear-gradient(top, rgba(165,203,254,1) 0%, rgba(69,162,255,1) 32%, rgba(15,139,255,1) 50%, rgba(177,212,252,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(165,203,254,1)), color-stop(32%, rgba(69,162,255,1)), color-stop(50%, rgba(15,139,255,1)), color-stop(100%, rgba(177,212,252,1)));
	background: -webkit-linear-gradient(top, rgba(165,203,254,1) 0%, rgba(69,162,255,1) 32%, rgba(15,139,255,1) 50%, rgba(177,212,252,1) 100%);
	background: -o-linear-gradient(top, rgba(165,203,254,1) 0%, rgba(69,162,255,1) 32%, rgba(15,139,255,1) 50%, rgba(177,212,252,1) 100%);
	background: -ms-linear-gradient(top, rgba(165,203,254,1) 0%, rgba(69,162,255,1) 32%, rgba(15,139,255,1) 50%, rgba(177,212,252,1) 100%);
	background: linear-gradient(to bottom, rgba(165,203,254,1) 0%, rgba(69,162,255,1) 32%, rgba(15,139,255,1) 50%, rgba(177,212,252,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a5cbfe', endColorstr='#b1d4fc', GradientType=0 );}
	/*form {border: 3px solid #f1f1f1;}*/

input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 40%;
}

button:hover {
    opacity: 0.8;
}

.newuserbtn {
    width: 40%;
    padding: 10px 18px;
    background-color: #0066D8;
}

.imgcontainer {
    text-align: center;
    margin: 50px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .newuserbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<form action="check2.php" method="post">
<center> 
 <div class="imgcontainer" margin='20px'>
	<center>
    <img src="imgprofile.jpg" alt="Avatar" class="avatar">
	</center>
  </div>
 </center>
<br>
<center>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <br>
	<input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <br>
	<input type="password" placeholder="Enter Password" name="psw" required>
    <br>    
    <button type="submit">Login</button>
    <label>
	<br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div class="container" ">
    <button type="button" class="newuserbtn"> <a href="user_register.php">New User ? Register Here</a></button>
  </div>
</center>
  </form>

</body>
</html>
