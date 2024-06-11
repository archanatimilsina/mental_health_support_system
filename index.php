<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav{
        width: 100%;
        height: 60px;
        border: 1px solid black;
        background: lavender;
    
    }
    .left-nav{
        width: 18%;
        height: 100%;
        position: relative;
        display: inline-block;
        padding-left: 30px;
    }
    .right-nav{
        width: 80%;
        height: 100%;
        display: inline-block;
        position: relative;
    }
    .left-nav img{
        position: absolute;
        width: 30%;
        height: 60px;
       
    }
    .right-nav ul{
      list-style-type: none;
      position: absolute;

    }
    .right-nav ul li{
        display: inline-block;
        margin: 20px;
        font-family: 'Courier New', Courier, monospace;
        font-size: 17px;
    

    }
    .right-nav ul li a{
        text-decoration: none;
        color: black;
    }
     .right-nav ul li a button{
        width: 100px;
        height: 30px;
         margin-top: -20px;
    } 
    .login-button
    {
        width: 150px;
        height: 30px;
    }
    .register-button
    {
        width: 150px;
        height: 30px;
    }
    body{
        display: flex;
        flex-direction: column
    }
    .welcome
    {
        width: 94%;
        height: 700px;
        margin: auto;
        border: 1px solid black;
        margin-top: 15px;

    }
    .welcome img{
        width: 100%;
        height: 100%;
    }
    .services{
        width: 96%;
        margin: auto;
        margin-top: 20px;
      max-height: 1000px;
        /* border: 1px solid black;  */
    
    }
    .servicesbox{
      width: 30%;
        float: left;
    }
    .services h1{
font-size: 30px;
font-weight: 500px;
padding-left: 30px;
    }
    .servicesbox{
         margin: 20px;
        width: 25%;
        max-height: 400px;
        border: 1px solid black;
    padding: 20px;
margin: 20px 40px;
    }
    .servicesbox h4{
        font-size: 25px;
        font-weight: 300px;
        text-align: center;
        margin: 5px;

    }
.servicesbox p{
    margin:20px 0px;
}
    .servicesbox a button
    {
        width: 100px;
        height: 40px;
        border-radius: 10px;
        color: black;
        font-size: 20px;
        font-family: cursive;
    }
    .servicesbox a{
        text-decoration:none;
        margin-left: 72px;

    }
    .serviceimg{
        width: 80%;
        height: 150px;
        margin: auto;
    }
    .whyus
{
    width: 100%;
    border: 1px solid black;
    height: 700px;
    display: flex;
    flex-direction: column;
    position: relative;
}
.whyusbox
{
    margin-top: 70px;
    display: flex;
    flex-direction: row;
    border: 1px solid black;
    position: absolute;
    width: 100%;
    height: 500px;
}
.wcontent
{
    width: 40%;
    height: 100%;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
}
.wimage
{
    width: 60%;
    height: 100%;
    border: 1px solid black;
border-collapse: collapse;
position: relative; 
display: flex;
    align-items: center;
    justify-content: center;
}
.wimage img{
    position: absolute;
    width: 90%;
    height: 90%;
    margin: auto;
   
}
.whyus h4{
    font-size: 25px;
        font-weight: 300px;
    padding: 10px;
        margin: 20px 0px;

}
footer{
    width: 100%;
    height: 400px;
    border: 1px solid black;
    margin-top: 20px;
    background-color: black;
}
/* Login Register */
#login-popup
        {
            width: 300px;
    height: 300px;
border: 1px solid rgb(58, 46, 163);
display: none;
flex-direction: column;
z-index: 1;
background-color: #f0f0f0;
     border-radius: 5px;
    padding: 20px 25px 25px 25px;
    position: fixed;
    left: 400px;
    top: 90px;
        }
        #register-popup
        {
            width: 300px;
    height: 300px;
border: 1px solid rgb(199, 26, 26);
display: none;
margin:auto;
flex-direction: column;

z-index: 1;
background-color: #f0f0f0;
     border-radius: 5px;
    padding: 5px 10px 10px 5px;
    position: fixed;
    left: 400px;
    top: 90px;
    outline: none;
        }

      .popup{
    background-color: #f0f0f0;
     border-radius: 5px;
    padding: 20px 25px 30px 25px;
    width: 100%;
    height: 100%;
}
.popup h2{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 30px;
    color: #30475e;
    border: none;
    background-color: transparent;
    outline: none;
    font-size: 18px;
    font-weight: 550;
  
}
.login-btn
{
    margin-bottom: 15px;
}

.popup input{
    width: 100%;
    margin-bottom: 8px;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #30475e;
    border-radius: 0px;
    padding: 2px 0;
    font-size: 12px;
    
}
#user-icon
{
    padding: 10px;
    position: relative;
    display: inline-block;

}
/* Login Register */
/* dropdown */
.paste-button{
          position: relative;
          margin: auto;
     display: inline-block;

        }
        .dropdown-content
        {
            width: 150px;
            height: 150px;
            display: none;
            position: absolute;
            left: 30px;
            z-index: 1;
        }
        .paste-button:hover .dropdown-content
        {
display: block;
        }
        .dropdown-content a{
            display: block;
            text-decoration: none;
            background-color: lavender;
            border: 2px solid black;
            color: black;
            height: 25%;
            border-radius: 5px;
        }
        .dropdown-content a:hover{
            background-color: white;
        }
/* dropdown */
#offuserpopup
{
    width: 300px;
    height: 190px;
border: 1px solid black;
margin:auto;
flex-direction: column;
margin-top: 100px;
z-index: 1;
display: flex;
padding: 10px 10px 20px 10px;
}
.reset-heading{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

#offuserpopup .reset-btn{
   position: relative;
   right: 0;

}
#offuserpopup p{
    font-size:17px;
    padding: 35px 5px 15px 5px;

}
#offuserpopup .sub-btn{
    width: 150px;
    height: 50px;
    background-color: blue;
    color: white;
    border: 1px solid blue;
    border-radius:5px;
    position: relative;
    left: 53px;
}


    </style>
</head>
<body>
  
    <nav>
        <div class="left-nav">
<img src="assets/images/hello.jpg" alt="#" width="100%" height="100%">
        </div>
        <div class="right-nav">
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="resources.php">Resources</a></li>
    <li><a href="quiz.php">Quizzes</a></li>
    <li><a href="forum.php">Forum</a></li>
    <?php
      if(isset($_SESSION['user_panel']['logged_in']) && $_SESSION['user_panel']['logged_in']==true)
    {
        ?>
        <div id="user-icon">
        <i class="fa-solid fa-user"></i>
      </div>
      <?php
    }
    else
    {
    ?>
    <li>
        
    <div class="paste-button">
        <button class="button login-button">Login</button>
        <div class="dropdown-content">
            <a onclick="popupbox('login-popup')">User</a>
            <a href="index.php">Official User</a>
            <a href="professionallogin.php">Professional</a>
            <a href="admin.php">Admin</a>
        </div>
    </div>
            <!-- <button class="login-button" onclick="popupbox('login-popup')">
                Login
            </button> -->
    </li>
    <li>
    <div class="paste-button">
        <button class="button register-button">Login</button>
        <div class="dropdown-content">
            <a onclick="popupbox('register-popup')">User</a>
            <a onclick="subpopup()">Official User</a>
            <a href="professionallogin.php">Professional</a>
            <a href="admin.php">Admin</a>
        </div>
    </div>
        
    </li>
    <?php
     }
    ?>
</ul>
        </div>

    </nav>

<!-- official user register -->
<div id="offuserpopup">
<h3 class="reset-heading">
<span>Official user Register</span>
<button type="reset" onclick="subpopup()" class="reset-btn">X</button></h3>
<p>You have to subscribe to be a official user</p>

<a href="subscribe.php"><button class="sub-btn">Subscribe Now</button></a>
</div>
<!-- official user register -->


    <!-- login popup -->
    <div id="login-popup">
    <div class="login popup">
        <form action="login.php" method="POST">
            <h2 class="reset-heading">
                <span>User Login</span>
                <button type="reset" onclick="popupbox('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="login-btn" name="login">Login</button>
        </form>
    
     <button onclick="popupbox('forgot-popup')">Forget password?</button>
    </div>
  </div>  
    <!-- login popup -->
     <!-- register popup -->
      
  <div id="register-popup">
    <div class="register popup">
        <form action="register.php" method="POST" enctype="multipart/form-data">
                <h2 class="reset-heading">
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popupbox('register-popup')" >X</button>
                </h2>
                 <label for="image">Upload profile:</label> 
                <input type="file" name="profile" >
                <input type="text" placeholder="First NAME" name="fname" required>
                <input type="text" placeholder="Last NAME" name="lname" required>
                <input type="text" placeholder="User Name" id="username" name="username">
                <input type="email" placeholder="E-mail"  id="email" name="email">
                <input type="password" placeholder="Password"  id="password" name="password">
                <button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
  </div> 
     <!-- register popup -->
 <section class="welcome">
    <img src="assets/images/hello.jpg" alt="#">
 </section>
 <section class="services">
    <h1>Services</h1>
    <div class="servicesbox">
        <div class="serviceimg">
        <img src="assets/images/hello.jpg" alt="" width="100%" height="100%"></div>
<h4>Yoga</h4>
<p>
    Lorem ipsum dolor, sit amet consectetur adipi
    repudiandae ratione quas mollitia nulla magnam. elit. Fugiat ad impedit quae ipsam. Nulla!
</p>
<a href="yoga.php"><button>Yoga</button></a>
    </div>
   
    <div class="servicesbox">
        <div class="serviceimg">
        <img src="assets/images/hello.jpg" alt="" width="100%" height="100%"></div>
<h4>Yoga</h4>
<p>
    Lorem ipsum dolor, sit amet consectetur adipi
    repudiandae ratione quas mollitia nulla magnam. elit. Fugiat ad impedit quae ipsam. Nulla!
</p>
<a href="yoga.php"><button>Yoga</button></a>
    </div>
   
    <div class="servicesbox">
        <div class="serviceimg">
        <img src="assets/images/hello.jpg" alt="" width="100%" height="100%"></div>
<h4>Yoga</h4>
<p>
    Lorem ipsum dolor, sit amet consectetur adipi
    repudiandae ratione quas mollitia nulla magnam. elit. Fugiat ad impedit quae ipsam. Nulla!
</p>
<a href="yoga.php"><button>Yoga</button></a>
    </div>
   
    <div class="servicesbox">
        <div class="serviceimg">
        <img src="assets/images/hello.jpg" alt="" width="100%" height="100%"></div>
<h4>Yoga</h4>
<p>
    Lorem ipsum dolor, sit amet consectetur adipi
    repudiandae ratione quas mollitia nulla magnam. elit. Fugiat ad impedit quae ipsam. Nulla!
</p>
<a href="yoga.php"><button>Yoga</button></a>
    </div>
   
    <div class="servicesbox">
        <div class="serviceimg">
        <img src="assets/images/hello.jpg" alt="" width="100%" height="100%"></div>
<h4>Yoga</h4>
<p>
    Lorem ipsum dolor, sit amet consectetur adipi
    repudiandae ratione quas mollitia nulla magnam. elit. Fugiat ad impedit quae ipsam. Nulla!
</p>
<a href="yoga.php"><button>Yoga</button></a>
    </div>
    <div class="servicesbox">
        <div class="serviceimg">
        <img src="assets/images/hello.jpg" alt="" width="100%" height="100%"></div>
<h4>Yoga</h4>
<p>
    Lorem ipsum dolor, sit amet consectetur adipi
    repudiandae ratione quas mollitia nulla magnam. elit. Fugiat ad impedit quae ipsam. Nulla!
</p>
<a href="yoga.php"><button>Yoga</button></a>
    </div>
 </section>

 
 <section class="whyus">
    <h4>Why us?</h4>
    <div class="whyusbox">
        <div class="wcontent"></div>
        <div class="wimage">
            <img src="assets/images/hello.jpg" alt="" width="100%" height="100%">
        </div>
    </div>
 </section>
 <section class="footer">
    <footer>
        
    </footer>
 </section>
 <script>
       function popupbox(popupname)
    {
let x=document.getElementById(popupname);

if(x.style.display=="none")
{
    x.style.display="flex";
}
else{
    x.style.display="none";
}
    }
  function subpopup()
  {
    let x=document.getElementById('offuserpopup');
    if(x.style.display=="none")
{
    x.style.display="flex";
}
else{
    x.style.display="none";
}
  }
 </script>
</body>
</html>