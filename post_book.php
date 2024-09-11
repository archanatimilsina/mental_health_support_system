<?php

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Book detail</title>
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
    <label for="name">Topic</label><br>
    <input type="text" name="topic"><br>
    <label for="name">writer</label><br>
    <input type="text" name="writer"><br>
<label for="content">Caption</label><br>
    <input type="text" class="content" name="caption"><br>

<input type="submit" name="submit">

  </form>  
<?php
if(isset($_POST['submit']))
{
    $filename=$_FILES['profile']['name'];
$tmpname=$_FILES['profile']['tmp_name'];
$folder="uploads/".$filename;
move_uploaded_file($tmpname,$folder);
$topic=$_POST['topic'];
$writer=$_POST['writer'];
$caption=$_POST['caption'];
if($caption!="")
{
    $query="INSERT INTO books (profile,topic,writer,caption) values('$folder','$topic','$writer','$caption')";
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