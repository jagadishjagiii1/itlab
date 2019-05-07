<html>
<body>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
	uid : <input type="text" name ="cid" id="cid" /></br></br>
	cname : <input type="text" name="cname" id="cname" /></br></br>
	<input type="submit" value="save" />
</form>
</body>
</html>
<?php
if(isset($_POST['cid']) && isset($_POST['cname']))
{

$con=mysqli_connect("localhost","root","root","votedb");
if($con==false) echo "connection error".mysqli_connect_error($con);

  $cid=$_POST['cid'];
  $cname=$_POST['cname'];



   $sql="insert into candidate(indexx,cid,cname,vcount)values (1,'$cid','$cname',0)";
   if(mysqli_query($con,$sql)){
   echo "candidate added successfully";
}  else {
      echo "ERROR : could not able to execute $sql.".mysqli_error($con);
	}
$can="update login set profile=2 where uid='$cid'";
if(mysqli_query($con,$can)) {
	echo "login table updated successfully";
			    }
else {
	echo "ERROR : could not able to execute $sql.".mysqli_error($con);
     }
}
?>
