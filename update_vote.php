<?php
$con=mysqli_connect("localhost","root","root","votedb");

$name=$_POST['candidate'];
echo $name."</br>";

$query = "update candidate set vcount=vcount+1 where cid='$name'";

mysqli_query($con,$query) or die ("error upadating the vote");

echo "your vote is successfull". "</br>";

?>
