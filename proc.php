<?php


if(isset($_SESSION['loggedin']) &&($_SESSION['loggedin']===true))
{
	echo "You are already logged in.. Please logout first";
	exit;

}


else
{
	require_once "config/config.php";

	$email=mysqli_real_escape_string($db, $_POST['email']);
$password=mysqli_real_escape_string($db, $_POST['psw']);
if(empty($email)||empty($password))
{
	header("location: signin.php?error=3");
	exit();
	die();
}
$result=$db->query("SELECT * FROM user WHERE email = '$email' ");
$row = $result->fetch_assoc();
if(($row['email'] ==$email))
{
	
	if( ($row['psw']==$password))
	{
		session_start();
                            
                            // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;   
	header("location: home.php");
	}
	else
	{
		header("location: signin.php?error=1");


		
		die();
	}
}
else{
	header("location: signin.php?error=2");
	exit();
	die();

}
}

?>