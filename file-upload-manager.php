<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_FILES["photo"])&& $_FILES["photo"]["error"]==0)
    {
        $allowed_ext=array("jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "gif" => "image/gif",
            "png" => "image/png");
    $file_name=$_FILES["photo"]["name"];
    $file_type=$_FILES["photo"]["type"];
    $file_size=$_FILES["photo"]["size"];

    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    if(!array_key_exists($ext,$allowed_ext))
    die ("ERROR: Please select valid format");
    
    $maxsize=2*1024*1024;
    
    if($file_size> $maxsize)
    die("ERROR: File size is larger than limits");

    if(in_array($file_type,$allowed_ext))
    {
        if(file_exists("uploads/".$_FILES["photo"]["name"]))
        echo $_FILES["photo"]["name"]."is already exists";
        else
        {
            move_uploaded_file($_FILES["photo"]["tmp_name"],"uploads/".$_FILES["photo"]["name"]);
            echo "Your file is uploated sucessfully";
        }
    }
    else
    {
        echo "Error:Please try again";
    }
}
else
{    
    echo "Error:".$_FILSE["photo"]["error"];
}
}
?>
