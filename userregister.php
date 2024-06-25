<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>

<?php 
if(isset($_POST['submit']))
{
    $filename=$_FILES['profile']['name'];
$tmpname=$_FILES['profile']['tmp_name'];
$folder="uploads/".$filename;
move_uploaded_file($tmpname,$folder);
$name=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
if($email!=""&&$password!="")
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
                window.location.href='index.php';
                </script>";
            }
            else
            {
        echo" <script>
        alert('username already taken');
        window.location.href='index.php';
        </script>";
    }
}
else
{
    $password=password_hash($password,PASSWORD_BCRYPT);
    $query="INSERT INTO users (profile,fullname,username,email,password) values('$folder','$name','$username','$email','$password')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo" <script>
        alert('you are registered succesfully');
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

}

?>
</body>
</html>