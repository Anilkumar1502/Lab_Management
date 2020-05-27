<?php

require_once "config/config.php";
$email=mysqli_real_escape_string($db, $_POST['email']);
$password=mysqli_real_escape_string($db, $_POST['psw']);

$result=$db->query("SELECT * FROM user WHERE eemail = '$email' AND password = '$password' ");
$row = $result->fetch_assoc();
if($row['email']==$email && $row['password']==$password)
{
	echo "login success.. welcome".$row['mail'];
}
else
{
	echo "failed to login";
}
?>