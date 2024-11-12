<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <style>
        body
        {
         background-color: lavender;
        }
        .chatbox{
display: inline-block;
width: 60px;
height: 60px;
position:fixed;
right: 90px;
bottom: 90px;
z-index: 50;
}
.chatbox i
{
    width: 60px;
    font-size: 100px;
   /* box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); */ 
}

/* .chatbox i:hover{
font-size: 0px;

  
} */
        .box1
        {
            display: flex;
            flex-direction: row;
          
            height: 400px;
          padding: 20px;
          margin-top: 30px;
          width: 90%;
          margin: auto;
border: 3px solid white;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); 
          border-radius: 20px;
          
          /* box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15); */
        }
        .box11
        {
width: 40%;
margin-right: 100px;
height: 100%;

border-radius: 50%;
position: relative;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);

        }
        .box11 img
        {
            width:100%;
            height: 100%;
            position: absolute;
            border-radius: 50%;
            
        }
        .box11:hover{
          border: 1px solid black; 
        }
        .box12
        {
        
width: 500px;
height: 350px;
border-radius: 20%;
border: 1px solid black;
background-color: lavender;

padding: 20px;
        }
        .box12:hover{
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }
        .heading{
            font-size: 2rem;
            font-family: cursive;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
        .heading-top{
            font-size: 2rem;
            font-family: cursive;
            font-weight: bold;
            text-align: center;
       
        }
        .paragraph{
            padding: 20px;
            text-align: center;
            font-family: cursive;
            font-weight: bold;
            font-size: 1rem;
            margin-top: 5px;
        }
        .link-button1{
            width: 110px;
            height: 45px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            background-color: white;
        position: absolute;
        right: 25%;
        font-family: cursive;
            font-weight: bold;
            font-size: 1rem;
            margin-top: 5px;
        }
        .link-button2{
            width: 110px;
            height: 45px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            background-color: lavender;
        position: absolute;
       
        font-family: cursive;
            font-weight: bold;
            font-size: 1rem;
            margin-top: 5px;
            margin-left: -40px;
        }

        /* box2 */
        .box2{
            width: 90%;
            margin: auto;
            height: 350px;
            background-color: white;
         
            border-radius: 20px;
            margin-top: 40px;
            border: 1px solid black;
            display: flex;
            /* justify-content: center; */
             align-items: center; 
            flex-direction: column;
            padding: 40px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }
        
        /* box2 */
        /* box3 */
.box3
{
    width: 96%;
margin: auto;
border-radius: 5px;
    height:400px;
    margin-top: 70px;
    background-color: lavender;
    display: flex;
    flex-direction: row;  
align-items: center;
        /* border: 1px solid black; */
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);


}
.box31
{

  width: 48%;
  height: 100%;
  display: flex;
  align-items: center;
justify-content: center;

}
.box311
{
    
  width: 60%;
  height: 60%; 
  background-color: white;
  border-radius: 5px;
  position: relative;
}
.box311 img{
    width: 100%;
    height: 100%; 
    border-radius: 5px;
    position: absolute;
}
.box32
{
    width: 48%; 
    height:90%; 
      background-color: white;
      margin: auto; 
      display: flex;
  align-items: center;
justify-content: center;
flex-direction: column;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);

}
.link-button3{
            width: 150px;
            height: 45px;
          
            background-color: lavender;
        position: absolute;
        font-family: cursive;
            font-weight: bold;
            font-size: 1rem;
            margin-top: 5px;margin-left:-38px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }
        .link-button4{
            width: 200px;
            height: 45px;
           
            background-color: white;
            font-family: cursive;
            font-weight: bold;
            font-size: 1rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
           
        }
  .third
        {
          
         border-radius: 5px;
           
        }
.box4
{
    width: 100%;
    height:1510px;
  
    margin-top: 70px;
    background-color: lavender;
  
    
}
        /* box3 */
        .fourth
        {
            width: 90%;
            margin: auto;
            display: flex;
            flex-direction: row;
            height: 400px;
          padding: 20px;
          margin-top: 80px;
          background-color: white;
          border-radius: 10px;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }
       .fourth:hover{
     border: 1px solid whitesmoke;
       }
        .box411{
            width: 40%;
margin-right: 100px;
height: 100%;
border: 1px solid black;
border-radius: 50%;
position: relative;
        }
        .box411 img{
            width:100%;
            height: 100%;
            position: absolute;
            border-radius: 50%;
        }
        .box412
        {
width: 60%;
height: 350px;
background-color: lavender;
padding: 20px;
        }
        
        .box422
        {
            width: 40%;  
            height: 100%;
            border: 1px solid black;
            border-radius: 50%;
            position: relative;
            margin-left: 40px;
        }
        .box422 img{
            width:100%;
            height: 100%;
            position: absolute;
            border-radius: 50%;
           
        }
        .box421
        {
width: 60%;
height: 350px;
background-color: lavender;
padding: 20px;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
        }
      

/*  Footer  */ 

#footer
{
    margin-top: 70px;
}
.footer{
    background-color: #222;
    padding: 5rem 1rem;
    line-height: 2rem;
    margin-top: 600px;

}

.footer-center{
    margin-right: 1rem;

}

.footer-container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    color: #fff;
}

.footer-center a:link,
.footer-center a:visited{
    display: block;
    color: #f1f1f1;
    font-size: 1.4rem;
    transition: 0.6s;
}

.footer-center a:hover{
    color: #f60091;
}
.footer-center p{
    font-size: 20px;
}

.footer-center div{
    color: #f1f1f1;
    font-size: 1.4rem;
}

.footer-center h3{
    font-size: 1.8rem;
    font-weight: 400;
    margin-bottom: 1rem;
}
/* footer */
    </style>
</head>
<body>

<a href="index.php" class="chatbox"><i class="fa-solid fa-comment-sms" style="color:purple;" title="Open Chatbox"></i></a>
<nav>
    <img src="assets/images/meditate.jpg" alt="" id="logo">
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="resources.php">Resources</a></li>
   <li><a href="forum.php">Forum</a></li>
   <li><a href="qna.php">Quizzes</a></li>
   <li><a href="admin/admin.php">website Func.</a></li>
   <?php
      if(isset($_SESSION['userpanel']['logged_in']) && $_SESSION['userpanel']['logged_in']==true)
    {
        ?>
          <li>
         <div class="paste-button">  
    <div id="user-icon">
         <i class="fa-solid fa-user"></i>
      </div>
         <div class="dropdown-content">
             <a href="logout.php">Logout</a>
        </div>
    </div>
     </li> 
    <?php
    }
    else
    {
        ?>
    
      <div class="paste-button">
          <button class="abutton login-button">Login</button>
          <div class="dropdown-content">
              <a onclick="popupbox('login-popup')">User</a>
              <a onclick="offlogin()">Official User</a>
              <a onclick="proflogin()">Professional</a>
              <a onclick="adminlogin()">Admin</a>
          </div>
      </div> 

       </li>
      <li>
      <div class="paste-button">
          <button class="abutton register-button">Register</button>
          <div class="dropdown-content">
              <a onclick="popupbox('register-popup')">User</a>
              <a onclick="subpopup()">Official User</a>
              <a onclick="profregpopup()">Professional</a>
          </div>
      </div>
       
      </li> 
      
       <?php
     }
?>
<!-- user register -->
<div id="register-popup">
    <div class="register popup">
        <form action="register/userregister.php" method="POST" enctype="multipart/form-data">
                <h2 class="reset-heading">
                    <span>User Register</span>
                    <button type="reset" onclick="popupbox('register-popup')" >X</button>
                </h2>
                 <label for="image">Upload profile:</label> 
                <input type="file" name="profile" >
                <input type="text" placeholder="FULL NAME" id="fullname" name="fullname">
                <input type="text" placeholder="User Name" id="username" name="username">
                <input type="email" placeholder="E-mail"  id="email" name="email">
                <input type="password" placeholder="Password"  id="password" name="password">
                <button type="submit" class="register-btn" name="submit">Register</button>
            </form>
        </div>
  </div> 
<!-- user register -->

<!-- user login -->
<div id="login-popup">
    <div class="login popup">
        <form action="login/userlogin.php" method="POST">
            <h2 class="reset-heading">
                <span>User Login</span>
                <button type="reset" onclick="popupbox('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="login-btn" name="submit">Login</button>
        </form>
    
     <button onclick="popupbox('forgot-popup')">Forget password?</button>
    </div>
  </div>  
<!-- user login -->

<!-- subscribe now -->
<div id="offuserpopup">
<h3 class="reset-heading">
<span>Official user Register</span>
<button type="reset" onclick="subpopup()" class="reset-btn">X</button></h3>
<p>You have to subscribe to be a official user</p>

<a href="subscribe.php"><button class="sub-btn">Subscribe Now</button></a>
</div>
<!-- subscribe now -->

<!-- official user login -->
<div id="offlogin-popup">
    <div class="login popup">
        <form action="login/offlogin.php" method="POST">
            <h2 class="reset-heading">
                <span>Official userLogin</span>
                <button type="reset" onclick="offlogin()">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="login-btn" name="submit">Login</button>
        </form>
    
     <button onclick="popupbox('forgot-popup')">Forget password?</button>
    </div>
  </div>  
<!-- official user login -->

<!-- professional register -->
<div id="profregister-popup">
    <div class="register popup">
        <form action="register/profregister.php" method="POST" enctype="multipart/form-data">
                <h2 class="reset-heading">
                    <span>Professional Register</span>
                    <button type="reset" onclick="profregpopup()" >X</button>
                </h2>
                 <label for="image">Upload profile:</label> 
                <input type="file" name="profile" >
                <input type="text" placeholder="FULL NAME" id="fullname" name="fullname">
                <input type="text" name="username"  placeholder="username" required>
                <input type="text" name="address" placeholder="address"  required>
                <input type="text" name="phnum"  placeholder="Phone Number" required>
                <input type="email" required name="email"  placeholder="email" >
                <input type="password" required name="password" placeholder="password" >
                <button type="submit" class="register-btn" name="submit">Register</button>
            </form>
        
        </div>
  </div> 
<!-- professional register -->

<!-- professional login -->
<div id="proflogin-popup">
    <div class="login popup">
        <form action="login/proflogin.php" method="POST">
            <h2 class="reset-heading">
                <span>Professional Login</span>
                <button type="reset" onclick="proflogin()">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="email_username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" class="login-btn" name="submit">Login</button>
        </form>
    
     <button onclick="popupbox('forgot-popup')">Forget password?</button>
    </div>
  </div>  
<!-- professional login -->

<!-- admin login -->
<div id="adminlogin-popup">
         <div class="login popup">
             <form action="login/adminlogin.php" method="POST">
                 <h2 class="reset-heading">
                     <span>Admin Login</span>
                     <button type="reset" onclick="adminlogin()">X</button>
                     </h2>
                     <input type="text" placeholder="E-mail or Username" name="email_username" required>
                     <input type="password" placeholder="Secret Code" name="scode" required>
                     <input type="password" placeholder="Password" name="password" required>
                     <button type="submit" class="login-btn" name="submit">Login</button>
                     </form>
                     
                     <button onclick="popupbox('forgot-popup')">Forget password?</button>
                     </div>
                     </div>
<!-- admin login -->
    </ul>
</nav>
<div class="box1 first">
    <div class="box11">
        <img src="assets/images/meditate.jpg" alt="">
    </div>
    <div class="box12">
        <h1 class="heading">
            Why us?
        </h1>
        <p class="paragraph"> hic soluta ullam tenetur perspiciatis quidem laboriosam quia asperiores dolorem, magni ipsam deserunt, quas, adipisci minima beatae fuga corporis aliquid aperiam laudantium! Expedita, fugit repudiandae distinctio ea eaque, totam perspiciatis, dolore omnis veritatis dolor reiciendis quos quidem esse. Quidem!</p>
        <a href="aboutus.php"><button class="link-button1">About us</button></a>
    </div>

</div>
<div class="box2">
<h1 class="heading">
            Resources
        </h1>
        <p class="paragraph">We provide you resources for being more clear about mental health.
            You can access our best articles. We also provide the articles concerning the recent problems about mental health problems in Nepal.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, eveniet est nulla sunt molestias commodi praesentium maxime delectus tenetur libero.
        </p>
        <a href="resources.php"><button class="link-button2">Click Here</button></a>
</div>

<div class="box3">
<div class="box31 third">
<div class="box311">
<img src="assets/images/company.jpg" alt="Not found">
</div>
</div>
<div class="box32 third">
<h1 class="heading">Forum panel</h1>
<p class="paragraph">Sometimes all we need to do is spill our heart. We need to accept our story and move on.
    You can share your stories to the world. Not just stories, You can write articles and post. just write and post...and connect to the world.
</p>
<a href="resources.php"><button class="link-button3">open Discussion Forum</button></a>
</div>
</div>
<div class="box4">
    <h1 class="heading-top">Our Services</h1>
    <div class="box41 fourth">
    
    <div class="box411">
        <img src="assets/images/stoptime.jpg" alt="">
    </div>
    <div class="box412">
        <h1 class="heading">
           Yoga and Online Counsil
        </h1>
        <p class="paragraph">We provide online council and yoga session. If you are interested on
             joining us, please be a official user and connect with us. </p>
        <a><button class="link-button1" onclick="subpopup()">Subscribe Now</button></a>
    </div>
    </div>
    <div class="box42 fourth">
    <div class="box421">
        <h1 class="heading">
           Quizzes
        </h1>
        <p class="paragraph">We provide you mental health quizzes from which we can report your mental health status.
            </p>
        <a href="quiz.php"><button class="link-button4">Test your mental health</button></a>
    </div>
    <div class="box422">
        <img src="assets/images/fly.jpg" alt="not found">
    </div>
    </div>
    <div class="box41 fourth">
    
    <div class="box411">
        <img src="assets/images/yes.jpg" alt="">
    </div>
    <div class="box412">
        <h1 class="heading">
           Yoga and Online Counsil
        </h1>
        <p class="paragraph">We provide online council and yoga session. If you are interested on
             joining us, please be a official user and connect with us. </p>
        <a><button class="link-button1" onclick="subpopup()">Subscribe Now</button></a>
    </div>
    </div>
</div>
<!-- <a href="index.php" class="chatbox"><i class="fa-solid fa-message fa-xlg" style="color: #63E6BE;" title="Open Chatbox"></i></a> -->

<section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>The majority of independent <br> properties are losing out <br> on a lot of business for <br> one very simple reason: <br> their hotel websites are poorly <br> designed.</p>
                </div>
                <div class="footer-center">
                    <h3>USEFUL LINKS</h3>
                    <a href="index.php">Home</a>
                    <a href="food.php">Food</a>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="feedback.php">Feedback</a>

                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>Sudal-9,Bhaktapur <br>9806531378<br>www.swiftstay.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        
                        Sun: 6AM-10PM
                    </div>
                  
                    <div>
                       
                       Mon-wed: 8AM-9PM
                    </div>
                    <div>
                       Thu: 7AM-10PM
                    </div>
                    <div>
                   Fri & Sat: 5AM-11PM
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="assets/js/script.js"></script>
</body>
</html>