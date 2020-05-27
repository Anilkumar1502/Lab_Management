<?php

$domain = 'localhost';
$db_usr = 'root';
$db_psw = '';
$db_name = 'test';

$db = mysqli_connect($domain, $db_usr, $db_psw, $db_name) or die(mysqli_connect_error());

?>