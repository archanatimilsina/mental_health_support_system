<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Register Page</title>
    <style>

    </style>
</head>
<body>

<!-- <div class="register-popup">
        <div class="register-form">
<form action="#" method="POST">
    <label for="firstname">First Name</label>
   <input type="text" name="fname" required>
   <label for="lastname">Last Name</label>
   <input type="text" name="lname" required>
   <label for="username">Username</label>
   <input type="text" name="username" required>
   <label for="Address">Address</label>
   <input type="text" name="address" required>
   <label for="phone number">Phone number</label>
   <input type="text" name="phnum" required>
   <label for="email">Email</label>
   <input type="email" required name="email">
   <label for="password">Password</label>
   <input type="password" required name="password">
   <input type="submit" required name="submit">
</form>
        </div>
    </div> -->
<?php 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $phnum=$_POST['phnum'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

if($email!=""&&$password!="")
{
    
// professional

    $select_query="SELECT * FROM papplication where email='$email'or username='$username'";
    $select_result=mysqli_query($con,$select_query);
    $data=mysqli_fetch_array($select_result);
    $count=mysqli_num_rows($select_result);
    
    if($count>0)
    {
        if($email=$data['email'])
        {
         
            echo" <script>
            alert('Email already taken you need to wait till your account registered officially after that you get your secret code');
            window.location.href='profregister.php';
            </script>";
        }
        else
        {
           
    echo" <script>
    alert('username already taken  you need to wait till your account registered officially after that you get your secret code');
    window.location.href='profregister.php';
    </script>";
}
}
else
{
     
$password=password_hash($password,PASSWORD_BCRYPT);
$query="INSERT INTO papplication (fname,lname,username,address,phnum,email,password) values('$fname','$lname','$username','$address','$phnum','$email','$password')";
$result=mysqli_query($con,$query);
if($result)
{
    echo" <script>
    alert('your account is registered succesfully');
    window.location.href='index.php';
    </script>";
}
else{
    echo" <script>
    alert('Try Again');
    </script>";
}
}
}
// professional

}

?>
</body>
</html>