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
			$query="UPDATE equipments SET equip_qt=$remaining WHERE id = $id";
			$result =mysqli_query($db, $query) or die(mysqli_error($db));
		}

		if(!empty(trim($desc, " ")))
		{
			$query="UPDATE equipments SET equip_desc='$desc' WHERE id = $id";
			$result =mysqli_query($db, $query)or die(mysqli_error($db));
		}

		if (!empty($_FILES['image']['size']))
		{
			$name = addslashes($_FILES['image']['name']);
			$image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
			$query="UPDATE equipments SET equip_name='$name', equip_img='$image' WHERE id = $id";
			$result =mysqli_query($db, $query) or die(mysqli_error($db));
		}
		


header("location: equipments.php");



	}
	
	



?>
