<?php
$db_host='localhost';
$db_user='root';
$db_passwd='root';
$db_name='sample1';

//$con=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) 
//or 
//die("error connecting database.".mysqli_connect_error($con));


/*
$sql="CREATE TABLE student(firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,age INT(5))";

if(mysqli_query($con,$sql)) {
echo "table student created succesfuly";
} else {
echo "error creating table :".mysqli_error($con);
}
mysqli_close($con);
*/





$link = mysqli_connect("localhost","root","root","sample1");
if($link==false) {
die ("error : could not connect".mysqli_connect_error());
}
$sql="INSERT INTO student(firstname,lastname,age)
VALUES('simple','singh','19')";
if(mysqli_query($link,$sql))
{
   echo "insertion successfull";
}
else {
echo "error inserting data".mysqli_error($con);
}

?>
