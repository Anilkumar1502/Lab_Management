<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" >
	<title>Sign-Up</title>
		
<style type="text/css">
body {

	font-family: monospace;
    padding: 0;
    margin: 0;
     background-image: url("images/back3.jpeg	");
    background-size: cover;
}

.alert{
	position: relative;
	margin-bottom: 30px;
	color:blue;
	text-align: center;
	font-style: italic;
}
 .signupBox
 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 450px;
  height: auto;
  padding: 20px 40px;
padding-bottom: 60px;
  padding-left: 60px;
  padding-right: 80px;
  box-sizing: border-box;
  background: rgba(0,0,0,0.5);
  font-color:#fff;

}
h2
{
	margin-bottom: 40px ;
	padding: 0 0 10px;
	color: #ffffff;
	text-align: center;
	font-size: 20px;
}
.signupBox label, p
{
	padding: 0;
	margin: 0;
	font-size: 19px;
	color:#fff;
}
.signupBox input 
{
	width: 100%;
	margin-bottom: 20px;
	padding-left: 10px;
	margin-right: 101px ;
	border-width: 1.5px;

}
.signupBox input[type="text"], .signupBox input[type="password"], .signupBox input[type="email"]
{
	border-radius: 9px;
	color:#fff;
	background: rgba(0,0,0,0.5);
	height: 30px;
	font-size: 18px;

}
.signupBox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color:#fff;
	font-size: 16px;
	background: rgb(155, 28, 126);
	cursor: pointer;
	font-weight: bold;
	border-radius: 9px;
	border-width: 1px;

}
label[for="show_password"]
{
	font-size: 14px;
	width: auto;
	padding: 0;
}

.signupBox input[type="checkbox"]
{
	font-size: 10px;
	width: auto;
}


</style>
</head>
<body>
<div class="signupBox">
	
	<div class="alert">
		<?php

			if(isset($_GET['error'])==true){
				if ($_GET['error']==1) {
				echo '<p > Email You  provided already exists </p>';
			}
			if ($_GET['error']==2) {
				echo '<p> Passwords did not match</p>';
			}
			}

			?>
	</div>
	<h2>Sign Up<hr></h2>
	
	<form action="register.php" method="post" onsubmit="checkPassword();">

		<label for="uname">Username</label>
		<input type="text" name="uname" placeholder="Username" required>
		<label for="email">E-mail</label>
		<input type="email" name="email" placeholder="E-mail" required>
		
		<label for="psw">Password</label>
		<input type="password" name="psw" id="password1" placeholder="Password" required>
		<label for="rpsw">Confirm Password</label>
		<input type="password" name="rpsw" id="password2" placeholder="Confirm Password">
		<label for="show_password">Show Password</label>
		<input type="checkbox" onclick="show_psw()">
		<input type="submit" name="signup" value="Sign Up">
		<p style="font-weight: normal; font-style: italic;">Already registered?<a href="signin.php" style="margin-left: 10px; color:rgb(100, 200,100);">
			<b>Log In</b></a></p>

		</form>
</div>
<script type="text/javascript">
	function show_psw()
	{
		var p1 = document.getElementById("password1");
		var p2 = document.getElementById("password2");
		if(p1.type === "password" )
		{
			p1.type = "text";
			p2.type = "text";	
		}
		else
		{
			p1.type = "password";
			p2.type = "password";
		}
	}

	function checkPassword(form){
		p1 = form.password1.value;
		p2 = form.password2.value;
		if(p1 != p2)
		{
			alert("\nPassword do not match!");
			return false;
		}
	}

</script>
</body>
</html>