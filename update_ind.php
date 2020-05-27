<?php
require_once "config/session.php";
require_once "config/config.php";
echo "string";
if(isset($_POST['submit']))
{
	$id= (int)mysqli_real_escape_string($db, $_POST['id']);
	$remaining=mysqli_real_escape_string($db, $_POST['remaining']);
	$desc=mysqli_real_escape_string($db, $_POST['desc']);

	
	
	echo $id;
	echo $remaining;
	echo $desc;


		if(!empty($remaining))
		{
			$remaining = (float)$remaining;
			$query="UPDATE indicators SET ind_qt=$remaining WHERE id = $id";
			$result =mysqli_query($db, $query) or die(mysqli_error($db));
		}

		if(!empty(trim($desc, " ")))
		{
			$query="UPDATE indicators SET ind_desc='$desc' WHERE id = $id";
			$result =mysqli_query($db, $query)or die(mysqli_error($db));
		}

		if (!empty($_FILES['image']['size']))
		{
			$name = addslashes($_FILES['image']['name']);
			$image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
			$query="UPDATE indicators SET img_name='$name', ind_img='$image' WHERE id = $id";
			$result =mysqli_query($db, $query) or die(mysqli_error($db));
		}
		


header("location: indicators.php");



	}
	
	



?>
