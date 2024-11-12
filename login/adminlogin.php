<?php require('../connection.php');

session_start(); ?>
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
         $scode=$_POST['scode'];
        $email_username=$_POST['email_username'];
        $password=$_POST['password'];
      $select_query="SELECT * from admin where email='$email_username' OR username='$email_username'";
      $select_result=mysqli_query($con,$select_query);
      $count=mysqli_num_rows($select_result);
      if($count!=0)
      {
$data=mysqli_fetch_array($select_result);
if(password_verify($password,$data['password']))
{
  if (password_verify($scode, $data['scode'])) {
    {
    $_SESSION['adminpanel']['logged_in']=true;
    $_SESSION['adminpanel']['id']=$data['a_id'];
    $_SESSION['adminpanel']['username']=$data['username'];
    $_SESSION['adminpanel']['email']=$data['email'];
    echo" <script>
    alert('".$_SESSION['admin']['id']."');
   
    </script>";
    ?>
    <script>
window.location.href='../admin/admin.php'; 
</script>
<?php
}
}
else
{
    echo" <script>
    alert('password incorrect!Try again');
    window.location.href='../index.php';
    </script>";
}

      }
      else
      {
        echo" <script>
    alert('No email or any username is found!!');
    window.location.href='../index.php';
    </script>";
      }
    }
  }
    ?>
</body>
</html>