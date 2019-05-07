<?php
$con=mysqli_connect("localhost","root","root","votedb");

$query = "select * from candidate";

$result = mysqli_query($con,$query) or die ("error querying the database");

echo "fetching success";
echo '<form id="myform" action="update_vote.php" method="post">';

while ($row=mysqli_fetch_array($result))
{ 
   echo '<input type="radio" id="name1" name="candidate" value="'.$row['cid'].'">'.$row['cname']. '</input> </br>';
}

echo '<input type="submit" value="vote">';
echo '</form>';
?>
