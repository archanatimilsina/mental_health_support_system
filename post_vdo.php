<?php

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post Video</title>
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
    <label for="name">Creator</label><br>
    <input type="text" name="creator"><br>
    <label for="name">topic</label><br>
    <input type="text" name="topic"><br>
    <label for="name">Time Interval</label><br>
    <input type="text" name="time"><br>
<input type="submit" name="submit">

  </form>  
<?php
if(isset($_POST['submit']))
{
    $filename=$_FILES['profile']['name'];
$tmpname=$_FILES['profile']['tmp_name'];
$folder="uploads/".$filename;
move_uploaded_file($tmpname,$folder);
$time=$_POST['time'];
$topic=$_POST['topic'];
$creator=$_POST['creator'];

if($folder!="")
{
    $query="INSERT INTO videos (video,topic,creator, time_interval) values('$folder','$topic','$creator','$time')";
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