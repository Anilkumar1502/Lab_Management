<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		.ty
		{
			text-align: center;
/*			background-size: cover;
*/			width: 250px;
			height: 250px;
			border: 1px solid;
		}
	</style>
</head>
<body>

<?php

if(isset($_POST['submit'])){
	if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
		echo "Failed";
	}
	else{
		$name=addslashes($_FILES['image']['name']);
		$image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
		saveImage($name, $image);
	}
}
function saveImage($name, $image)
{
	require_once "config/config.php";
	$query = $db->query("INSERT INTO salts(salt_name, salt_capacity, salt_remaining, img_name, salt_img) VALUES('NaSO4', 5, 4, '$name', '$image')");
if($query===true)
{
	echo "Successs";
}
else echo "False";
}
display();

function display(){
			require_once "config/config.php";

	$result = $db->query('SELECT * FROM salts');
	while($row = $result->fetch_assoc()){

		echo "<div class='ty'>".'<h1>'.$row['salt_name'].'</h1>'.'<div class="ty"><img src="data:image; base64,'.$row['salt_img'].'"></div><form  method="post" enctype="multipart/form-data">
	<input type="file" name="image"><br>
	<input type="submit" name="submit" value="Submit" >
</form></div>';
	}
	
	
}

	?>
</body>
</html>