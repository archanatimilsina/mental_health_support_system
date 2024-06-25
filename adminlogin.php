<?php require('connection.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<!--     
<div class="login-popup">
        <div class="login-form">
<form action="#" method="POST">
 <label for="email">Email/username</label>
   <input type="text" required name="email_username">
   <label for="password">Password</label>
   <input type="password" required name="password">
  <label for="Secret code">Secret Code</label> -->
   <!-- <input type="password" required name="scode"> -->
   <!-- <input type="submit" required name="submit"> -->
<!-- </form> 
        </div>
    </div> -->

    <?php 
    if(isset($_POST['submit']))
    {
        // $scode=$_POST['scode'];
        $email_username=$_POST['email_username'];
        $password=$_POST['password'];
      $select_query="SELECT * from aapplication where email='$email_username' OR username='$email_username'";
      $select_result=mysqli_query($con,$select_query);
      $count=mysqli_num_rows($select_result);
        
      if($count!=0)
      {
$data=mysqli_fetch_array($select_result);
if(password_verify($password,$data['password']))
{
    $_SESSION['logged_in']=true;
    $_SESSION['admin']['username']=$data['username'];
    $_SESSION['admin']['email']=$data['email'];
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
    window.location.href='index.php';
    </script>";
}

      }
      else
      {
        echo" <script>
    alert('No email or any username is found!!');
    window.location.href='index.php';
    </script>";
      }
    }
    ?>
</body>
</html>