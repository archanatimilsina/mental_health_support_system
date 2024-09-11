<?php

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post article</title>
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
<label for="content">Content</label><br>
    <input type="text" class="content" name="content"><br>

<input type="submit" name="submit">

  </form>  
<?php
if(isset($_POST['submit']))
{
    $filename=$_FILES['profile']['name'];
$tmpname=$_FILES['profile']['tmp_name'];
$folder="uploads/".$filename;
move_uploaded_file($tmpname,$folder);
$content=$_POST['content'];
$name=$_POST['fullname'];

if($content!="")
{
    $query="INSERT INTO articles (profile,writer,content) values('$folder','$name','$content')";
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