<?php

require_once "config/session.php";
require_once "config/config.php";


if(isset($_POST['submit']))
{
	
	$quantity=mysqli_real_escape_string($db, $_POST['quantity']);
	$desc=mysqli_real_escape_string($db, $_POST['desc']);
	$itemname=mysqli_real_escape_string($db, $_POST['itemname']);

	
	
		if((empty($itemname) ||  (empty($_FILES['image']['size']))))
		{
			echo "You Missed out some filled or Entered wrong values!...Try again...";
			mysqli_close($db);
			die();

				
		}

		else
		{

			$imagename = addslashes($_FILES['image']['name']);
			$image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
			
			$quantity= (float)$quantity;

			$query = "INSERT INTO indicators(ind_name, ind_qt, img_name, ind_img, ind_desc) VALUES('$itemname', $quantity, '$imagename', '$image', '$desc')";

			$result =mysqli_query($db, $query) 	 or die(mysqli_error($db));
			if($result)
			{
				echo "sucees";
				header("location: indicators.php");
			}
			else
			{
				echo "fails";
			}

		}

		//header("location: salts.php");

}


?>