
<?php require('../connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.message{
    
}
.message-head
{
    text-align: center;
    font-size: 25px; 
        font-family: 'Baloo 2', cursive;
        font-weight: 500;
}
.message form{
    width: 100%;
    height: 100%;
     border: 1px soild black;
     display: flex;
     flex-direction: column;
}
.message form #textarea{
   width: 300px;
   height: 400px;
       font-size: 21px; 
        font-family: 'Baloo 2', cursive;
        font-weight: 300;
   
}
#post-btn{
    width: 150px;
    height: 50px;
    background-color: blue;
    color: white;
    font-size: 21px; 
        font-family: 'Baloo 2', cursive;
        font-weight: 300;
   border: 1px solid black;
   margin: 10px 40px;
}

    </style>
</head>
<body>

<?php 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="SELECT * FROM messages WHERE m_id='$id'";
    $result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);

if($result)
{
    
?>
    <div class="message">
    <h1 class="message-head">Write Your Message Here</h1>
    <form action="#" method="POST">
       
        <input type="textarea" id="textarea" placeholder="Write Here" name="message">
        <input type="submit" value="Update" id="post-btn" name="submit">
    </form>
   </div> 
   <?php 
   if(isset($_POST['submit']))
   {
$profile=$_SESSION['admin_panel']['profile'];
$name=$_SESSION['admin_panel']['name'];
$email=$_SESSION['admin_panel']['email'];
$message=$_POST['message'];

$query1="UPDATE messages SET message='$message' WHERE m_id='$id'";
$result1=mysqli_query($con,$query1);

if($result1)
{
    echo" <script>
alert('Message Updated!!');
window.location.href='admintry.php';
</script>";
}
else{
    echo" <script>
alert('Cannot update!!');
window.location.href='admintry.php';
</script>";
}
   }
}
else{
    echo" <script>
    alert('Cannot run!!');
    window.location.href='admintry.php';
    </script>";
}
}
?> 
</body>
</html>