<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
		 $uid1=$_POST['uid'];
 		$pass=$_POST['password'];
 		echo $uid1;
 		echo '<br>';
 		echo $pass;
$con=mysqli_connect("localhost","root","root","votedb");
/*if($con==false)
	{
		echo "Connection Error".mysqli_connect_error($con);
	}*/

 $sql="SELECT * FROM login where uid='$uid1'";
$res=mysqli_query($con,$sql);
	/*{
		 if(mysqli_num_rows($res)>0)
		{*/
			 while($row=mysqli_fetch_array($res))
			{
			 if($row['password']!=$pass) echo "Password is not matching";
	else
			{
			  if($row['profile']==1)
				{
					header('location:admin.php');
				}
			  if($row['profile']==2)
				{
					header('location:vote.php');
				}	
			}
			}
    
		/*}
		else 
		{
		echo "No matching data";
		}
	}
	else{ echo "Wrong User Name";}*/
// 	mysqli_free_result($res);
}
?>

