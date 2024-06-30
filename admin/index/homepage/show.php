<?php include('../../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Page</title>
    <style>
       *{
margin: 0;
padding: 0;
box-sizing: border-box;
        }

 #home{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 600px;
    margin-bottom: 100px;
 
 }

 #home img{
    position: absolute;
    height: 95%;
     width: 100%;
     z-index: -1;
     opacity: 0.89;
    background: center center/cover no-repeat ;
 } 
 
    </style>
</head>
<body>
    <?php 
     if(isset($_GET['id']))
     {
        $id=$_GET['id'];
$select="SELECT * FROM ihome_img where hid='$id'";
$result=mysqli_query($con,$select);
$data=mysqli_fetch_assoc($result);
     }
?>
  
<section id="home">
        <img src="<?php echo $data['home_img'];?>" alt="home image">
    </section>   
</body>
</html>
