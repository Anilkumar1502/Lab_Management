

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" >
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	margin-bottom: 10px;
	margin-top: 20px;
	color:blue;
	text-align: center;
	font-style: italic;
}
 .signinBox
 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 450px;
  height: 600px;
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
.signinBox label, p
{
	padding: 0;
	margin: 0;
	font-size: 16px;
	color:#fff;
}
.signinBox input 
{
	width: 100%;
	margin-bottom: 20px;
	padding-left: 10px;
	margin-right: 101px ;
	border-width: 1px;

}
.signinBox input[type="password"], .signinBox input[type="email"]
{
	outline:none;
	border:none;
	border-radius: 6px;
	color:#fff;
	background: rgba(0,0,0,0.5);
	height: 30px;
	font-size: 16px;

}
.signinBox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	width: 100%;
	color:#fff;
	font-size: 16px;
	background: rgb(155, 28, 126);
	cursor: pointer;
	font-weight: bold;
	border-radius: 8px;
	border-width: 1px;

}
.fa
{
	margin-right: 10px;

}
.eye
{
	position: absolute;

}
#hide2
{
	display: none;
}
</style>
</head>
<body>
<div class="alert">

</div>
<div class="signinBox">
	
	<h2>Login<hr></h2>
	<form action="proc.php" method="post">
		
		<label for="email">E-mail</label>
		
		<input type="email" id="email" name="email" placeholder="E-mail" required>
		<label for="psw">Password</label>
	
		<span class="eye" onclick="show_psw()">
		<i id="hide1" class="fa fa-eye"></i>
		<i id="hide2" class="fa fa-eye-slash"></i>
	    </span>
	    
		<input type="password" name="psw" placeholder="Password" id="pwd"required> 
		<input type="submit" name="signin" value="Login">
		<p style="font-weight: normal; font-style: italic;margin-left: 40px">New User:?<a href="signup.php" style="margin-left: 10px; color:rgb(100, 200,100);"><b>Register</b></a></p>
		<?php
	if(isset($_GET['error'])==true){
		if(($_GET['error'])==1){
			echo '<p class="none" style="text-align:center; font-color:black; padding-top:30px;"> Wrong email or passwrod. Try again </p>';
		}
		if (($_GET['error'])==2) {
			echo '<p style="text-align:center; font-color:black; padding-top:30px;""> No user exists with that email!</p>';
		}
		if (($_GET['error'])==3) {
			echo '<p style="text-align:center; font-color:black; padding-top:30px;""> Please fill out all fields..</p>';
		}
	}
		
		?>

	</form>
</div>

<script >
	function show_psw()
	{
		var x = document.getElementById("pwd")
		var y = document.getElementById("hide1");
		var z = document.getElementById("hide2");
		
  if (x.type === "password") {
    x.type = "text";
    y.style.display="block";
    z.style.display="none";
  } 
  else {
    x.type = "password";
    y.style.display="none";
    z.style.display="block";
  }

	}
</script>
</body>
</html>

