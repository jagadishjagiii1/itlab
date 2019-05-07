<?php
session_start();
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
        $name=$_POST['name'];
	$id=$_POST['id'];
	$college=$_POST['college'];
	$dept=$_POST['department'];
	$num="130";
	
$query=mysqli_query($bd,"insert into students(name,id,college,department) values('$name','$id','$college','$dept')");

if($query)
{
    $sql1="DELETE from students where id='$num'";
    $result1=mysqli_query($bd,$sql1);
    $sql="SELECT * from students";
    $result=mysqli_query($bd,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo"<table align=center border=3px title=StudentDB>";
        echo"<tr>";
        echo"<th>name</th>";
        echo"<th>id</th>";
        echo"<th>college</th>";
        echo"<th>department</th>";
        echo"</tr>";
        while($row=mysqli_fetch_array($result))
        {
        echo"<tr>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$row['college']."</td>";
        echo"<td>".$row['department']."</td>";
        }
        echo"</table>";

}
else
{
echo "NO MATCH FOUND";
}

}
else
{
echo "ERROR";
}




}


?>

