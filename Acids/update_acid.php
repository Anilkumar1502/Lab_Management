<?php
require_once "config/session.php";
require_once "config/config.php";

if(isset($_POST['submit']))
{
	$id= (int)mysqli_real_escape_string($db, $_POST['id']);
	$remaining=mysqli_real_escape_string($db, $_POST['remaining']);
	$capacity=mysqli_real_escape_string($db, $_POST['capacity']);
	$desc=mysqli_real_escape_string($db, $_POST['desc']);

	
	if(!($remaining>$capacity))
	{	
		if(!empty($remaining))
		{
			$remaining = (float)$remaining;
			$query="UPDATE acids SET acid_remaining=$remaining WHERE id = $id";
			$result =mysqli_query($db, $query);
		}

		if(!empty(trim($desc, " ")))
		{
			$query="UPDATE acids SET acid_desc='$desc' WHERE id = $id";
			$result =mysqli_query($db, $query);
		}

		if (!empty($_FILES['image']['size']))
		{
			$name = addslashes($_FILES['image']['name']);
			$image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
			$query="UPDATE acids SET img_name='$name', acid_img='$image' WHERE id = $id";
			$result =mysqli_query($db, $query) or die(mysqli_connect_error());
		}
		header("location: acids.php");

	}
	else
	{
		echo "Remaining value is not descimal!... \n";
		echo "OR\n";
		echo "Remaining value entered is greater than the Capacity \n";
		echo "Try again :)\n";
		mysqli_close($db);
		die();
	}
}


?>
