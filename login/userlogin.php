<?php require('../connection.php');
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
        //check->
        echo '<script>alert("form submitted")</script>';
        //<-check
        $email_username=$_POST['email_username'];
        $password=$_POST['password'];
      $select_query="SELECT * from users where email='$email_username' OR username='$email_username'";
      $select_result=mysqli_query($con,$select_query);
      $count=mysqli_num_rows($select_result);
      if($count!=0)
      {
         //check->
         echo '<script>alert("Data is in Database")</script>';
         //<-check
$data=mysqli_fetch_array($select_result);
if(password_verify($password,$data['password']))
{
     //check->
     echo '<script>alert("password verified")</script>';
     //<-check
    $_SESSION['userpanel']['logged_in']=true;
    $_SESSION['userpanel']['username']=$data['username'];
    $_SESSION['userpanel']['profile']=$data['profile'];
    $_SESSION['userpanel']['fullname']=$data['fullname'];
    $_SESSION['userpanel']['account_type']='user';
    $_SESSION['userpanel']['email']=$data['email'];
   //check->
   echo '<script>alert("You are logged in congratulation happy birthday");
   window.location.href="../index.php"; 
   </script>';
   //<-check
    ?>
    <script>

</script>
<?php
}
else
{
    echo" <script>
    alert('password incorrect!Try again');
    window.location.href='../register/userregister.php';
    </script>";
}

      }
      else
      {
        echo" <script>
    alert('No email or any username is found!!');
    window.location.href='../register/userregister.php';
    </script>";
      }
    }
    ?>
</body>
</html>