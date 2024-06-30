<?php include('../../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
</head>
<body>
    <?php 
     if(isset($_GET['id']))
     {
       $id=$_GET['id'];
       $select="SELECT * FROM logo_img where l='$id'";
       $result=mysqli_query($con,$select);
       $data=mysqli_fetch_assoc($result);

       $query="DELETE FROM logo_img WHERE lid='$id'";
       $result=mysqli_query($con,$query);
       header('location:index.php');
     }
    
    ?>
</body>
</html>