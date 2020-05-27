<?php
require_once "config/session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

require_once "config/config.php";

$result = $db->query("SELECT * FROM user");
$i=0;
$array = array();
while ($row = $result->fetch_assoc()) {
	$array[] = $row;
	echo $array[$i]['email'].'  ';
	
	echo $array[$i]['psw'];
	echo "<br>";
	$i++;

}
/*for($i=0; $i<4; $i++){
echo $array[$i]['email'].'  ';
	
	echo $array[$i]['psw'];
	echo "<br>";
}*/
$result->free();


?>

</body>
</html>