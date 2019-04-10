<?php
$db_host='localhost';
$db_user='root';
$db_passwd='root';
$db_name='sample';

$con=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) 
or 
die("error connecting database.".mysqli_connect_error($con));
//echo "success";
/*

$sql="CREATE DATABASE sample2";
if(mysqli_query($con,$sql)) {
echo "database created successfully with the name sample2";
} 
else {
echo "error connecting database.".mysqli_error($con);

}
mysqli_close($con);
?>
*/

$sql="CREATE TABLE student(firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,age INT(5))";

if(mysqli_query($con,$sql)) {
echo "table student created succesfuly";
} else {
echo "error creating table :".mysqli_error($con);
}
mysqli_close($con);
?>
