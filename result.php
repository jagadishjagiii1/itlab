<?php
session_start();
$con=mysqli_connect("localhost","root","root","votedb");
if($con==false) echo "connection error";
mysqli_connect_error($con);
$s=$_SESSION['user'];
$ert="select * from candidate where cid='$s'";

if($res=mysqli_query($con,$ert) {
   if(mysqli_num_rows($res) > 0) {
    echo "<table>";
	echo "<tr>";
	echo "<th>cid</th>";
	echo "<th>cname</th>";
	echo "<th>vcount</th>";
	echo "<tr>";

while($row = mysqli_fetch_array($res)) {
       echo "<tr>";
	echo "<td>".$row['cid']."</td>";
	echo "<td>".$row['cname']."</td>";
	echo "<td>".$row['vcount']."</td>";
	echo "</tr>";
 }

echo "</table>";
}

?>
