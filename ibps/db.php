<?php 
$host='localhost';
$db='ibps';
$user='root';
$pass='vinods';
$con=mysql_connect($host,$user,$pass);
mysql_select_db($db,$con) or('DB Error');
?>
