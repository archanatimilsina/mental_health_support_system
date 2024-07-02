<?php  require('../../../connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reject Application</title>
</head>
<body>
    <?php
    if(isset($_GET['id']))
    {
    $id=$_GET['id'];
    $query1="Delete FROM aapplication where aaid='$id'";
    $result1=mysqli_query($con,$query1);

    }
    ?>
</body>
</html>