<?php
require_once "config/session.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Salts</title>
	<link rel="stylesheet" type="text/css" href="css/css1.css">
<style type="text/css">
	

.container{
	
	padding-top: 10px;
	padding-left: 50px;
	padding-right: 50px;
	padding-bottom: 60px;
	margin: auto;
	width: 60%;
	height: 1000px;
	overflow: scroll;
	background-color: #fff ;

}

.view{
	margin: auto;
	width: 60%;
	
	padding: 20px;
	margin-top: 20px;
	overflow: auto;
	
	background-color: white;

}
.name{
	background-color: white; 
	margin-bottom: 20px

}

.status
{
	font-size: large;
	font-family: monospace;
	width: auto;
	background-color: #fff;
	padding: 5px;
	clear: left;
	border-radius: 2px;
	height: 100%;
}

span.a{
	
; /* the default for span */
  width: 30%;
  height: 300px;
  padding: 5px;
  
  background-color: white; 
  float: left;
  margin-bottom: 10px;

}
span.b{

/* the default for span */
  width: 65%;
  height: 300px;
  overflow: scroll;
  padding: 5px;
  border: 2px solid black; 

  background-color: white; 
  margin-left: 1px;
  margin-right: 1px;
  float: left;
    margin-bottom: 10px;
    clear: right;
    


}
button:hover, a:hover {
 
  opacity: 0.5;
}

</style>

</head>
<body>
<nav class="menu">
   <ul>
    <li><a href='home.php'>HOME</a></li>
     <li><a href='equipments.php'>EQUIPMENT</a></li>
     <li><a href='acids.php'>ACIDS</a></li>
     <li><a href='indicators.php'>INDICATORS</a></li> 
     <li><a href='salts.php'>SALTS</a></li>
     
 </ul>
  <form class="search-form">
   <button>ABOUT</button>
   </form>

		
<?php
$i=0;	

require_once "config/config.php";
$result = $db->query('SELECT * FROM salts');
$array = array();
	while($row = $result->fetch_assoc())
	{
		$array[] = $row;
		
		$j=$i+10;
		$k=$j+10;
?>
		<div class="view"  >
			<div class="name" style="padding: 5px; ; height:auto;"><h4><?php echo $row["salt_name"];  ?><hr></h4>
			</div>
			
			<span class="a">
				<?php  echo '
				<img style="max-width: 100%; max-height: 100%;"src="data:image; base64,'.$row["salt_img"].' " >' ;?>
			</span>
			<span class="b" id="desc"  ><?php echo $row["salt_desc"]; ?>
			</span>
		
			<div class="status" >
				<div  style="background-color: #eeeeea	; width: auto; height: auto; padding: 5px; margin-bottom: 10px; overflow: auto;	">
					<label for="capacity">Capacity: <?php echo $row["salt_capacity"]; ?> </label>
					<label for="availabe">Availabel: <?php echo $row["salt_remaining"]; ?></label>

					<button  id = "<?php echo $i; ?>" onclick="updateF(<?php echo ($j); ?>)" >UPDATE</button>
					<div id="<?php echo($j); ?>" style="display:none" >
						<form   action="update_salt.php" style="width: 30%; " method="post" enctype="multipart/form-data">
							<label for="remaining">Remaining</label>
							<input type="float" name="remaining" >
							<label for="desc">Description</label>
							<textarea rows="5" cols="50" name="desc"></textarea>
							<label for="image">Image (Optional)</label>
							<input type="file" name="image">
							<input type="hidden" name="id" value="<?php echo $array[$i]['id']?>">
							<input type="hidden" name="capacity" value="<?php echo $array[$i]['salt_capacity']?>">
							

							<button name="submit" style="margin-left: 50%; margin-top: 20px;">Submit</button>
						</form>
					</div>

				</div>

			</div>
			</div>
		

<?php 	$i++;	}?>
			
		
	
	<script type="text/javascript">
	function updateF($id) 
		{
			  var x = document.getElementById($id);

			  if (x.style.display === "none") 
			  {
			    x.style.display = "block";
			  } 
			  else {
			    x.style.display = "none";
			  }
		}
		function update($id)
		{
			<?php

			echo "string";

			$db->query('UPDATE salts SET salt_remaining = 0.0 WHERE salt_name="$array[$id]" ') or die(mysqli_error());
			?>

		}
	
	</script>
</body>
</html>