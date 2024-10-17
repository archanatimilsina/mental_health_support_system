<?php
require('../connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .addpost
        {
            width: 70%;
            height: 300px;     
            margin: auto;
            margin-top: 40px;
            padding: 20px;
            background-color:lavender;
        }
        .addpost h1{
            text-align: center;
            font-size: 25px;
            font-family: cursive;
            
        }
        .addpost form
        {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 20px;
        

        }
        .addpost form #post{
       margin-left: 10%;
            width: 80%;
            height: 150px;
         border: dotted black 0.5px;
        }
        .addpost form #post::placeholder{
            text-align: center;
            font-size: 30px;
        }
        #submit-btn
        {
            width: 100px;
            height: 40px;
            margin:auto;
            background-color:white;
            color: black;
            font-size: 17px;
        }
      

    </style>
</head>
<body>
    <div class="addpost">
        <h1>Create New Post</h1>
<form action="#" method="POST">
    <input type="file" name="postimg">
<input type="text" placeholder="Write Here" max-length="1000" id="post" name="post">
<input type="submit" value="Post" id="submit-btn" name="submit">
</form>
    </div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{

    $filename=$_FILES['postimg']['name'];
$tmpname=$_FILES['postimg']['tmp_name'];
$folder="../uploads/".$filename;
move_uploaded_file($tmpname,$folder);
    $fullname=$_SESSION['userpanel']['fullname'];
     $account_type=$_SESSION['userpanel']['account_type'];
    $username=$_SESSION['userpanel']['username'];
    $profile=$_SESSION['userpanel']['profile'];
$post=$_POST['post'];


if($post!="")
{
   
$insert_query="INSERT INTO posts (profile,pfullname,account_type,post,pusername,postimg) values ('$profile','$fullname','$account_type','$post','$username','$folder')";
$result=mysqli_query($con,$insert_query);

if($result)
{
      
    echo" <script>
    alert('Your Post is uploaded');
    window.location.href='../forum.php';
    </script>";
}
else{
      
    echo" <script>
    alert('Post failed! Try Again');
    window.location.href='createpost.php';
    </script>";
}
}
else
{
    echo" <script>
    alert('You have to put contents');
    window.location.href='createpost.php';
    </script>";
}
}
?>