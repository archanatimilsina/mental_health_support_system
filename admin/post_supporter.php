<?php

include('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supporter detail post</title>
    <style>
        .content
        {
            width:100%;
        height:fit-content;
        text-align: canter;
        font-size: 20px;
        font-family: cursive;
        }
    </style>
</head>
<body>
  <form action="#" method="POST" enctype="multipart/form-data">
<label for="profile"></label><br>
    <input type="file" name="profile"><br>
    <label for="name">Username</label><br>
    <input type="text" name="fullname"><br>
<label for="content">Special_area</label><br>
    <input type="text" class="content" name="area"><br>

<input type="submit" name="submit">

  </form>  
<?php
if(isset($_POST['submit']))
{
    $filename=$_FILES['profile']['name'];
$tmpname=$_FILES['profile']['tmp_name'];
$folder="../uploads/".$filename;
move_uploaded_file($tmpname,$folder);
$name=$_POST['fullname'];
$area=$_POST['area'];


if($folder!="")
{
    $query="INSERT INTO supporters (profile,name,special_field) values('$folder','$name','$area')";
    $result=mysqli_query($con,$query);

    if($result)
    {
        echo"data update success!";
    }
    else{
        echo"try again!";
    }
}
}
?>
</body>
</html>