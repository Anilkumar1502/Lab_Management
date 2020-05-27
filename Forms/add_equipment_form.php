<?php
require_once "config/session.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD ACID</title>
	<style type="text/css">
		body{
	background-size: cover;
	margin:0;
	padding: 0;
	background-color: #dbdcdd;
}

		.view{
	margin: auto;
	width: 60%;
	padding: 40px 40px 40px 40px ;
	margin-top: 50px;
	overflow: auto;
	font-family: monospace;
	font-size: 18px;
	background-color: white;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
	</style>
</head>

<body>
	<div style="font-family: monospace; font-size: 18px; text-align: center; background:#1c3d72; color:#fff; margin: 0; padding: 0.2px;">
		<h2>CHEMICAL LABORATORY SYSTEMS</h2>
	</div>
	<div class="view">
		<div style="text-align: center; margin-bottom: 40px; ">
			<h4>Add New Equipment<hr></h4>
		</div>
		<div style="margin: auto; width: 400px;">
		<form  action="add_equipment.php" style="width: 30%; margin-top: 20px; " method="post" enctype="multipart/form-data">
			<label for="itemname">Name</label>
			<input type="text" name="itemname" required style="margin-bottom: 20px;">
			<label for="quantity">Quantity</label>
			<input style="margin-bottom: 20px;" type="float" name="quantity" >
			<label for="desc">Description</label>	
			<textarea style="margin-bottom: 20px;" rows="5" cols="50" name="desc"></textarea>
			<label for="image">Image</label>
			<input style="margin-bottom: 20px;" type="file" name="image">
			<button name="submit" style="margin-left: 50%; margin-top: 20px;">Submit</button>
		</form>
	</div>
	</div>

</body>
</html>