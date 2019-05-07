<form action="<?php $_SERVER["PHP_SELF"]?>" method="post"
enctype="multipart/form-data">
enter the image name : <input type="text" name="image_name" id=""/><br/>
<input name="image" id="image" accept="image/jpg" type="file"><br/></br>
<input type="submit" value="submit" name="submit" />
</form>
</br></br>

<!-- this form is to display user all images -->

<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post"
enctype="multipart/form-data">
retrive all the images : <input type="submit" value="submit" name="retrive" />
</form>


<?php

$link=mysqli_connect("localhost", "root", "root", "image");

if(isset($_POST['retrive']))
{
  header("location:search.php");
}

if(isset($_POST['submit']))
{
if(isset($_FILES['image']))
{
  $name=$_POST['image_name'];
  // $email=$_POST['mail'];
  $fp=addslashes(file_get_contents($_FILES['image']['tmp_name']));
}


$sql="INSERT INTO images(name,image) VALUES ('{$name}','{$fp}');";
mysqli_query($link,$sql) or die ("error in query insert : ".mysqli_error($link));
}
?>

