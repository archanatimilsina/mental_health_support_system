
<?php 
require('../../../connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Application Accept</title>
</head>
<body>
    <?php 
    $id=$_GET['id'];
$query1="SELECT * FROM aapplication where aaid='$id' ";
$result=mysqli_query($con,$query1);
$data=mysqli_fetch_array($result);

$profile=$data['profile'];
$fullname=$data['fullname'];
$username=$data['username'];
$address=$data['address'];
$phnum=$data['phnum'];
$email=$data['email'];
$password=$data['password'];
$created_at=$data['created_at'];


$check_query="SELECT * FROM admin WHERE email='$email'";
$check_result=mysqli_query($con,$check_query);
$data=mysqli_fetch_array($check_result);
if($check_result)
{
if(mysqli_num_rows($check_result)>0)
{
if($email=$data['email'])
{
    echo" <script>
    alert('This email is already registered.');
    window.location.href='index.php';
    </script>";
}
}
else{ 
   
$insert_query="INSERT INTO admin (profile, fullname, username, address, phnum, email, password, scode, created_at) VALUES('$profile','$fullname','$username','$address','$phnum','$email','$password','hello','$created_at')";
$result1=mysqli_query($con,$insert_query);

if($result1)
{
    echo" <script>
alert('Registration successful');
window.location.href='index.php';
</script>";
}
else{
    echo" <script>
    alert('Registration failed');
    window.location.href='index.php';
    </script>";
}
}
}

    ?>
</body>
</html>