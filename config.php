<?php
$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="root";
$mysql_database="student";
$bd = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password) or die ("could not connect database");
mysqli_select_db($bd,$mysql_database) or die ("could not select database");
?>

