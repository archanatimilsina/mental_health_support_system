<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
  
    <?php 
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $email_username=$_POST['email_username'];
        $password=$_POST['password'];
      $select_query="SELECT * from papplication where email='$email_username' OR username='$email_username'";
      $select_result=mysqli_query($con,$select_query);
      $count=mysqli_num_rows($select_result);
        
      if($count!=0)
      {
$data=mysqli_fetch_array($select_result);
if(password_verify($password,$data['password']))
{
    $_SESSION['professional']['logged_in']=true;
    $_SESSION['professional']['username']='$username';
    $_SESSION['professional']['email']='$email';
    ?>
    <script>
window.location.href='index.php'; 
</script>
<?php
}
else
{
    echo" <script>
    alert('password incorrect!Try again');
    window.location.href='register.php';
    </script>";
}

      }
      else
      {
        echo" <script>
    alert('No email or any username is found!!');
    window.location.href='register.php';
    </script>";
      }
    }
    ?>
</body>
</html>