<?php require('connection.php');
session_start();
?>
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
        $email_username=$_POST['email_username'];
        $password=$_POST['password'];
      $select_query="SELECT * from users where email='$email_username' OR username='$email_username'";
      $select_result=mysqli_query($con,$select_query);
      $count=mysqli_num_rows($select_result);
        
      if($count!=0)
      {
$data=mysqli_fetch_array($select_result);
if(password_verify($password,$data['password']))
{
    $_SESSION['logged_in']=true;
    $_SESSION['userpanel']['username']=$data['username'];
    $_SESSION['userpanel']['profile']=$data['profile'];
    $_SESSION['userpanel']['fullname']=$data['fullname'];
    $_SESSION['userpanel']['account_type']='user';
    $_SESSION['userpanel']['email']=$data['email'];
 
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