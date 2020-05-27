<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
		
<style type="text/css">
body {

	font-family: monospace;
    padding-top: 100px;
    padding-bottom: 100px;
    background-image: url("signup_bgrnd.jpg");
    background-size: cover;

 
}
 .wrapper{
  width: 500px ;
  padding-top:  20px ;
  padding-bottom: 50px;
  padding-left: 5%;
  padding-right: 5%;
  margin: auto;  
  border: 1px solid ;
  border-radius: 5px;
  font-family: monospace;
  font-style: normal;
  background-color:  #000000;
    opacity: 0.7;





   

}
.inwrap
{
	
	 border-radius: 5px;

	width: auto; 
    border: 2px solid ;
    padding: 40px 10% 5% 8%;
    font-size: x-large;


  margin: auto;  
}
.input
{
  width: 100%;
  margin-bottom: 10px;
  font-size: large;
}



</style>

</head>
<body>
	<div class="wrapper">

	<font color="white">

	<h2 style="text-align: center;">Chemical Laboratory System</h2><hr>
<h3 style="text-align: center; font-style: cursive ; font-size: x-large;">Register</h3>
		
	
	<div class="inwrap">
		
		<label for="uname"><b>Username</b></label><br>
		<input type="text" class="input" name="uname" placeholder="Name" required><br>
		


		<label for="email"><b>E-mail</b></label><br>
		<input type="email" class="input" name="email" placeholder="Email" required><br>
		


		<label for="psw"><b>Password</b></label><br>
		<input type="password" class="input" name="psw" placeholder="Password" required>

	

	
	<button  class="input" style="width: auto;" >Signup</button>
	</div>
</font>
</div>
</body>
	
</html>