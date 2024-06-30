<?php include('../../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
#tp-btn
        {
            background-color: blue;
            color: white;
            font-size: 16px; 
        font-family: 'Baloo 2', cursive;
        width: 150px;
        height: 40px;
   margin: 50px 50px;
   border-radius: 10px;
        }
        .profile{
            width: 400px;
            height: 200px;
            border: 1px solid black;
            margin: auto;
            margin-top: 80px;
        }
        .profile-head{
            margin-top: 20px;
            text-align: center;
            font-size: 22px;
             font-family: 'Baloo 2', cursive;
        }
       .profile form label{
            display: inline;
            font-size: 18px;
             font-family: 'Baloo 2', cursive;
             margin-left: 10px;
        }
        .profile form{
            display: flex;
           flex-direction: column;
        }
        .profile form input{
            margin: 8px;
        }
    </style>
</head>
<body>
<section class="main">
<div class="container">
    <a href="create.php"><button id="tp-btn">Manage Tasks</button></a>
  <?php 
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $select="SELECT * FROM ihome_img where hid='$id'";
    $result=mysqli_query($con,$select);
    $data=mysqli_fetch_assoc($result);
  }
  ?>
  <div class="profile">
    <h1 class="profile-head">Upload Picture</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="image">Upload here:</label>
<input type="file" name="uploadfile" required>
<input type="submit" name="submit_image" value="Upload">
    </form>
</div>  
<?php
 if(isset($_POST['submit_image']))
 {
   $filename=$_FILES['uploadfile']['name'];
   $tmpname=$_FILES['uploadfile']['tmp_name'];
   $folder="uploads/".$filename;
   $upload=move_uploaded_file($tmpname,$folder);
$query1="UPDATE ihome_img SET home_img='$folder' where hid='$id'";
$result1=mysqli_query($con,$query1);

if($result1)
{
   ?>
   <script>
alert("Data Updated Successfully");
document.location.href='index.php';
</script>
<?php
}
 else{
   ?>
   <script>
alert("Cannot Run!!!");
document.location.href='edit.php';
</script>
<?php
 }

 }
?>

</div>
    </section>
</body>
</html>