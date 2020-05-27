<?php
require_once "config/session.php";
require_once "config/config.php";

if(isset($_POST['submit']))
{
	
	$remaining=mysqli_real_escape_string($db, $_POST['remaining']);
	$capacity=mysqli_real_escape_string($db, $_POST['capacity']);
	$desc=mysqli_real_escape_string($db, $_POST['desc']);
	$itemname=mysqli_real_escape_string($db, $_POST['itemname']);

	
	if(!($remaining>$capacity))
	{	
		if((empty($remaining) || (empty($capacity)) || (empty($_FILES['image']['size'])) ||(empty($itemname))))
		{
			echo "You Missed out some filled or Entered wrong values!...Try again...";
				
		}

		else
		{

			$imagename = addslashes($_FILES['image']['name']);
			$image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
			
			$remaining = (float)$remaining;
			$capacity= (float)$capacity;



			$query = "INSERT INTO acids(acid_name, acid_capacity, acid_remaining, img_name, acid_img, acid_desc) VALUES('$itemname', $capacity, $remaining, '$imagename', '$image', '$desc')";

			$result =mysqli_query($db, $query) 	 or die(mysqli_error($db));
			if($result)
			{
				header("location: acids.php");
			}
			else
			{
				echo "fails";
			}

		}

		//header("location: salts.php");

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