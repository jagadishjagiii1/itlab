<html>
<head>
<title> ADMIN </title>

<style>
body{
    background-color:aqua;
    border:dotted;
    
}
form{
    background-color:white;
    border:solid;
height:200px;
width:400px;
}

</style>

</head>
<body>
<center>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
enter the candidate name:
       <input type="text" name="cname"><br/>
enter the candidate id:
       <input type="text" name="cid"><br/>

enter the candidate index:
       <input type="text" name="cindex"><br/>

<input type="submit" value="add" name="submit"/>
</form>
<br/><br/>

</center>
</body>
</html>
<?php

$con=mysqli_connect("localhost","root","root","votedb");
if($con==false) echo "connection error".mysqli_connect_error($con);
else echo "connection successful";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["cname"];
$id=$_POST["cid"];
$indexx=$_POST["cindex"];

$sql="INSERT INTO candidate(indexx,cid,cname,vcount) VALUES('1','{$id}','{$name}','0');";

if(mysqli_query($con,$sql))
{

echo "successfully inserted";



}
 else {
      echo "error:could not insert/execute query".mysqli_error($con);
}

$can="update login set profile=2 where UID='$id'";
if(mysqli_query($con,$can)){
  echo "login table updated";
} else {
 echo "error in updating".mysqli_error($con);
}
}








?>
