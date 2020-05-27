<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="border: 1px solid; ">
		
		<?php

		for ($i=0; $i < 4; $i++) { 
			$j=10+$i;
			# code...
		?>
		<div style="border: 1px solid; width: 250px; background-color: grey; margin-bottom: 20px;">


			<button id="<?php echo($i)	 ;?>" onclick="a(<?php echo ($j);?>)"  >UPDATE</button>

			
			<div id="<?php echo($j); ?>" hidden>
			
				<input type="text" name="fm"><p>Value</p>
			
			</div>
		
		</div>
		
<?php }?>
	



		</div>
		
	
	
<script type="text/javascript">	
	
function a($id) 
{
  var x = document.getElementById($id);

  if (x.style.display === "none") 
  {
    x.style.display = "block";
  } 
  else 
{
    x.style.display = "none";
  }
}

</script>



</body>
</html>