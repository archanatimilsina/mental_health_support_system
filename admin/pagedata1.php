<?php
include('../connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWIFTSTAY</title>
 <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
   
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* navbar */
        .navbar {
            width: 100%;
            position: sticky;
            height: 100px;
            background-color: #fa9579;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;


        }

        .left-nav {
            width: 20%;
        }

        .left-nav p {
            font-size: 2rem;
            font-family: 'Baloo 2', cursive;
            font-style: bold;
            color: white;
        }

        .right-nav {
            width: 80%;
            margin-top: 13px;

        }

        .right-nav ul {
            display: flex;
        }

        .right-nav ul li {
            list-style: none;

            margin: 20px;

        }

        .right-nav ul li a {
            text-decoration: none;
            color: #222;
            font-family: 'Baloo 2', cursive;
            padding: 0px 10px;
            font-size: 25px;
            font-weight: 400;
            position: relative;

        }

        .right-nav ul li a:hover {
            color: black;
            background: white;
            border-radius: 30px;
        }

        #user-icon {

            padding: 10px;
            position: relative;
            display: inline-block;

        }

        #admin-box {
            position: absolute;
            z-index: 1;
            width: 250px;
            height: 250px;
            top: 80px;
            background-color: white;
            font-family: 'Baloo 2', cursive;
            border: solid 2px black;
            right: 10px;
            display: none;
            flex-direction: column;
            padding-bottom: 20px;
            cursor: pointer;
        }

        #profile-pic {
            height: 90px;
            width: 40%;
            border: 0.1px solid black;
            border-radius: 50%;
            margin: auto;
            margin-top: 20px;

        }

        #admin-username {
            text-align: center;
            font-family: 'Baloo 2', cursive;
            font-weight: 300;

        }

        #logout-button {
            margin-left: 29%;
            background-color: #fa9579;
            color: black;
            font-family: 'Baloo 2', cursive;
            font-weight: 100;
            font-size: 18px;
            width: 100px;
            margin-bottom: 6px;
        }

        #logout-button a {
            text-decoration: none;
            color: black;
            font-family: 'Baloo 2', cursive;
        }

        #naccount-button {
            height: 30px;
            width: 80%;
            background-color: #fa9579;
            color: black;
            margin-left: 10%;
            margin-top: 10px;
        }

        #naccount-button a {
            text-decoration: none;
            color: black;
            font-family: 'Baloo 2', cursive;
            font-size: 19px;
        }
   
    
    /* head */
    .head{
      width: 100%;
      height: 70px;
      
    }
    /* head */


        /* menu icon */
.menu-icon
{
position: relative;
margin-left: 10px;
  top: 10px;
}
#menu
{
           position: absolute;
            width: 300px;
            /* height: 800px; */
            border: 1px solid black;
           left: 28px;
           top: 105px;
          display: none;
       flex-direction: column;
      z-index: 1;
        }
        
        .menu-first
        {
            width: 100%;
            border: 1px solid black;
            height: 12.5%;
        }
        
.div1
{
    position:relative;

}
#sec-menu{
    position: absolute;
    left:330px;
    height: 300px;
    width:200px ;
    border: 1px solid black;
    display: none;
    flex-direction: column;
    top: 150px;
    
}

.div11
{
    position: relative;
}
#reg-check{
position: absolute;
width: 100px;
height: 70px;
border: 1px solid black;
left: 535px;
display: none;
flex-direction: column;
}
.menu-third
{
    width: 100%;
            border: 1px solid black;
            height: 50%; 
}
.menu-first
{
    padding: 30px;
    
}
.menu-second
{
            width: 100%;
            border: 1px solid black;
            height: 16.67%; 
            padding:15px ; 
          
} 
.menu-second a{
  display: inline-block;
  text-decoration: none;
  text-align: center;
    font-family: 'Baloo 2', cursive;
    font-size: 20px;
    font-weight: 400;
    color: black;
}
.menu-first a{
  display: inline-block;
  text-decoration: none;
  text-align: center;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    color: black;
}
    </style>
    <?php require('inc/anavbar.php'); ?>
</head>
<body>
    
<div class="head">
  <div class="menu-icon">
  <a><i class="fa-solid fa-bars fa-lg" onclick="menu()"></i></a>
</div>
</div>

<!-- main menu -->
<div id="menu">
        <div class="menu-first div1" onclick="menuFirst()">
        <a>Official Users</a>
        <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
    </div>
        <div class="menu-first div2">
        <a href="notices/index.php">Notices</a>
        </div>
        <div class="menu-first div3">
        <a href="holidays/index.php">Holidays</a>
        </div>
       
        <div class="menu-first div4">
        <a href="index/index.php">Index Page</a>
        </div>
        <div class="menu-first div5">
        <a href="about/index.php">About Page</a>
        </div>
        <div class="menu-first div6">
        <a href="food/index.php">Food Page</a>
        </div>
        <div class="menu-first div7">
        <a href="contact/index.php">Contact Page</a>
        </div>
        <div class="menu-first div8">
        <a href="feedback/index.php">Feedback Page</a>
        </div>
    </div>
   
    <!-- main menu -->
    

<!-- Div 1 Ko Secondary menu -->
<div id="sec-menu">
<div class="menu-second div11">
<a href="roomservice/index.php">Room Services</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div12">
<a href="admindata/index.php">Admin</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div13">
<a href="reception/index.php">Reception</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div14">
<a href="cleaning/index.php">Cleaning service</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div15">
<a href="cashier/index.php">Cashier</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div16">
<a href="kitchen/index.php">Kitchen service</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
</div> 
<!-- Div 1 Ko Secondary menu -->
<?php require('inc/ascript.php');?>
<script>
    function menu() {
      let x = document.getElementById('menu');
      let y=document.getElementById('sec-menu');
      let z= document.getElementById('reg-check');
      if(x.style.display=="none")
    {
        x.style.display="flex";
    }
    else{
        x.style.display="none";
        y.style.display="none"; 
        z.style.display="none"; 
    }
    } 
    function menuFirst() {
     
      let y=document.getElementById('sec-menu');

    if(y.style.display=="none")
    {
        y.style.display="flex";
    }
    else{
        y.style.display="none";
       
    }
    } 
    
</script>
</body>
</html>