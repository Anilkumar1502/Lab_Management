<!DOCTYPE html>
<html>
<head>
	<title>Salts</title>
<style type="text/css">
	body{
		background-size: cover;
		padding: 20px;
		
	}


.container{
	border: 2px solid;
	border-radius: 2px;
	padding-top: 10px;
	padding-left: 50px;
	padding-right: 50px;
	padding-bottom: 60px;
	margin: auto;
	width: 60%;
	height: 1000px;
	overflow: scroll;
	background-color: grey;

}

.view{
	width: 90%;
	border: 2px solid;
	border-radius: 2px;
	padding-top: 0px;
	padding-bottom:  20px;
	float: left;
	overflow: auto;
	margin-top: 30px;
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
	border: 2px solid;
	border-radius: 2px;
	height: 100%;
}

span.a{
	
; /* the default for span */
  width: 30%;
  height: 300px;
  padding: 5px;
  border: 1px solid blue;  
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
  border: 1px solid blue;  
  background-color: white; 
  margin-left: 1px;
  margin-right: 1px;
  float: left;
    margin-bottom: 10px;
    clear: right;
    


}
button:hover, a:hover {
  background-color: lightgrey;
}

</style>

</head>
<body>
	<div class="container" >
		
<?php		
require_once "config/config.php";
$result = $db->query('SELECT * FROM salts');
	while($row = $result->fetch_assoc())
	{


	
		echo '

		<div class="view"  >


			<div class="name" style="padding: 5px; ; height:auto;"><h4>'.$row["salt_name"].'<hr></h4>
			</div>
			
			<span class="a">
				<img style="max-width: 100%; max-height: 100%;"src="data:image; base64,'.$row["salt_img"].' " >
			</span>
			<span class="b" id="desc"  >'.$row["salt_desc"].'
			</span>
		
			<div class="status">
				<div style="background-color: yellow; width: auto;">
					<label for="capacity">Capacity:'.' '.$row["salt_capacity"].' </label>
					<label for="availabe">Availabel:'.' '.$row["salt_remaining"].'</label>

					<button onclick="updateF()">UPDATE</button>
					<div id="myDIV" style="display:none">
					<input type="float" id="remain">Remaining</input>
					</div>

				</div>

			</div>
			</div>
			';
		}
			?>
		
	</div>
	<script type="text/javascript">
		function updateF() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
	
	</script>
</body>
</html>