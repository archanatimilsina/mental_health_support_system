<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>

    </style>
</head>
<body>
</body>
<div class="register-popup">
        <div class="register-form">
<form action="#" method="POST">
    <select name="id_type">
<option value="user">user</option>
<option value="offuser">official user</option>
<option value="professional">Professional</option>
<option value="admin">Admin</option>
    </select>
    <label for="firstname">First Name</label>
   <input type="text" name="fname" required>
   <label for="lastname">Last Name</label>
   <input type="text" name="lname" required>
   <label for="username">Username</label>
   <input type="text" name="username" required>
   <label for="email">Email</label>
   <input type="email" required name="email">
   <label for="password">Password</label>
   <input type="password" required name="password">
   <input type="submit" required name="submit">
</form>
        </div>
    </div>
<?php 
if(isset($_POST['submit']))
{
$id_type=$_POST['id_type'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


if($email!=""&&$password!="")
{

// official user
if($id_type="offuser")
{
   ?>
   <a href="officialuserregister.php?fname=<?php echo $fname; ?> & lname=<?php echo $lname; ?> & username=<?php echo $username; ?>"></a>
<?php
//     echo" <script>
//     alert('Only Authorized user can register account!!!');
//     window.location.href='officialuserregister.php';
//     </script>";
}
// official user



// professional

if($id_type="professional")
{
    ?>
    <a href="professionalregister.php?fname=<?php echo $fname; ?> & lname=<?php echo $lname; ?> & username=<?php echo $username; ?>"></a>
 <?php  
}
// professional

// admin
if($id_type="admin")
{
    ?>
   <a href="adminregister.php?fname=<?php echo $fname; ?> & lname=<?php echo $lname; ?> & username=<?php echo $username; ?>"></a>
<?php
}
// admin

    // user registration
    if($id_type="user")
    {
        $select_query="SELECT * FROM users where email='$email'or username='$username'";
        $select_result=mysqli_query($con,$select_query);
        $data=mysqli_fetch_array($select_result);
        $count=mysqli_num_rows($select_result);
        
        if($count>0)
        {
            if($email=$data['email'])
            {
                echo" <script>
                alert('Email already taken');
                window.location.href='register.php';
                </script>";
            }
            else
            {
        echo" <script>
        alert('username already taken');
        window.location.href='register.php';
        </script>";
    }
}
else
{
    $password=password_hash($password,PASSWORD_BCRYPT);
    $query="INSERT INTO users (fname,lname,username,email,password) values('$fname','$lname','$username','$email','$password')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo" <script>
        alert('Data is submitted succesfully');
        window.location.href='register.php';
        </script>";
    }
    else{
        echo" <script>
        alert('Try Again');
        </script>";
    }
}
}
// user registration


}
}
?>
</body>
</html>