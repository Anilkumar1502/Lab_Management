<?php



require_once "config/config.php";	

if($db===false)
{
	echo "Could not connect to server, cheack your internet connection";
	die();

}

if(isset($_POST['signup']))
{
	$uname = mysqli_real_escape_string($db, $_POST['uname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$psw = mysqli_real_escape_string($db, $_POST['psw']);
	$rpsw = mysqli_real_escape_string($db, $_POST['rpsw']);


	if(!empty($uname)|!empty($email)|!empty($psw)|!empty($rpsw))
	{
		if($psw!=$rpsw)
		{
			$msg ="Pass not matched";
			header("location: signup.php");
			exit();
			die();
		}
		$check_query= "SELECT * FROM user where email = '$email' ";
		$res = $db->query($check_query);
		$row = $res->fetch_assoc();
		if($row['email']==$email)
		{

			echo "An account with this email already exists.";
			header('location: signup.php');

		}

		$query = "INSERT INTO user(uname, email, psw) VALUES('$uname', '$email', '$psw')";
		
		if(mysqli_query($db, $query)) 
			{
				header("location: signin.php");
			}

		else{
			echo "error:" . mysqli_error($db);
		}
	}

}
else{
	echo "Bad Request";
	mysqli_close($db);
}

?>