<?php
session_start();
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
        $name=$_POST['name'];
	$id=$_POST['id'];
	$college=$_POST['college'];
	$dept=$_POST['department'];
	
$query=mysqli_query($bd,"insert into students(name,id,college,department) values('$name','$id','$college','$dept')");

if($query)
{
  $result=mysqli_query($bd,"SELECT * from students");
  while($row=mysqli_fetch_array($result))
	{
	    $n=$row["name"];
	    $i=$row["id"];
	    $d=$row["department"];
	    $c=$row["college"];
            
	echo "name" .$n."<br>";						
	echo "ID" .$i."<br>";
	echo "department" .$d."<br>";
	echo "college" .$c."<br>";

	}
   }
else
  {
    echo "please check something went wrong";
  }
}
else
{
  echo "u cant";
}
?>
