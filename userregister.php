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

}
}
?>
</body>
</html>