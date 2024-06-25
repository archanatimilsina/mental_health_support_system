<?php require('../connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <style>
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    /* body
    {
        background-color: lavender;
    } */
   
.warn{
    border: solid 1px red;
    box-shadow:  4px 4px 10px -7px inset red;
    background-color:white;
}
.warn span{
    color: red;
    font-size: 19px;
    font-family: 'Baloo 2', cursive;
}
.warn i{
   margin: 7px;
}

.aregisterform{
width: 400px;
height: 730px;
margin: auto;
display: flex;
flex-direction: column;
background-color: white;
padding: 30px;
justify-content: space-around;
margin-top: 70px;
border: solid 1px black;
    }
.aregisterform:hover{
    
    border-radius: 10px;
    background-color: lavender;
}
    
    #aregister-head
    {
        text-align: center;
        font-size: 23px;
        font-family: 'Baloo 2', cursive;
        margin-top: 20px;
    }
   
    .aregisterform form{
       width: 100%;
       padding: 20px; 
       margin-top: -20px;
    }

    .aregisterform form label{
        font-size: 21px; 
        font-family: 'Baloo 2', cursive;
        font-weight: 300;
    }
   
    .aregisterform form input
    {
 width: 90%;
    margin: 10px;
     padding: 3px 0;
    text-align: center;
    font-family: 'Baloo 2', cursive;
    font-size: 16px;
    }
    
    #submit-btn
    {
background-color: black;
color: white;
    }
</style>
</head>
<body>
<h1 class="warn">
   <i class="fa-solid fa-triangle-exclamation" style="color: #ff0000;"></i>
   <span>Authorized only!!!!</span>
   </h1>
   <div class="aregisterform">
<h1 id="aregister-head">Admin Register Form</h1>
<form action="#" method="POST" enctype="multipart/form-data">
<label for="image">Upload here:</label>
<input type="file" name="profile">
<label for="name">Full Name</label>
<input type="text" placeholder="FULL NAME" id="fullname" name="fullname">
<label for="name">UserName</label>
<input type="text" name="username"  placeholder="username" required>
<label for="name">Address</label>
                <input type="text" name="address" placeholder="address"  required>
                <label for="name">PhoneNumber</label>
                <input type="text" name="phnum"  placeholder="Phone Number" required>
<label for="name">Email</label>
<input type="email" name="email" required title="Please Enter Valid Email" >
<label for="name">Password</label>
<input type="password" name="password" required  maxlength="8"  title="8 character in maximum">

<input type="submit" name="register" value="submit" id="submit-btn">
 </form>
</div>
<?php 
if(isset($_POST['register']))
{
$filename=$_FILES['profile']['name'];
$tmpname=$_FILES['profile']['tmp_name'];
$folder="../uploads/".$filename;
move_uploaded_file($tmpname,$folder);
$name=$_POST['fullname'];
$address=$_POST['address'];
$phnum=$_POST['phnum'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$check_query="SELECT * FROM aapplication WHERE email='$email'";
$check_result=mysqli_query($con,$check_query);
$data=mysqli_fetch_array($check_result);
if($check_result)
{
if(mysqli_num_rows($check_result)>0)
{
if($email=$data['email'])
{
    echo" <script>
    alert('You are already registered.');
    window.location.href='../index.php';
    </script>";
}
}
else{ 
   
      $password=password_hash($password,PASSWORD_BCRYPT);
    //  $scode=password_hash($scode,PASSWORD_BCRYPT);
     $qry="INSERT INTO aapplication (profile,fullname,username,address,phnum,email,password) VALUES ('$folder','$name','$username','$address','$phnum','$email','$password')";
$result=mysqli_query($con,$qry); 

if($result)
{
echo" <script>
alert('Registration successful');
window.location.href='../index.php';
</script>";
}
else{
    echo "<script>
    alert('Cannot Run!');
     window.location.href='../index.php';
    </script>";
}

}

}
else{
    echo "<script>
    alert('cannot run!');
     window.location.href='../index.php';
    </script>";
}
}
?>
</body>
</html>




