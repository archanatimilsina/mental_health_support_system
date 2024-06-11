<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .register-popup
        {
            display: flex;
            flex-direction: column;
            width: 40%;
            height: 200px;
            border: 1px solid black;
margin: auto;
top: 200px;
position: fixed;
left: 33%;

justify-content: center;
        }
        .register-box
        {
            width: 100%;
            height: 100%;
            
        }
        .register-box form{
            width: 100%;
            height: 100%; 
            display: flex;
            flex-direction: column;
          
        }
        .register-box 
    </style>
</head>
<body>
     <div class="register-popup">
        <div class="register-box">
<form action="#" method="POST">
 <h2>
        <span>Register</span>
</h2>
    
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
</body>
</html>