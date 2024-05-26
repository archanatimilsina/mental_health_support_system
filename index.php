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
    </style>
</head>
<body>
  
    <nav>
        <div class="left-nav">
<img src="assets/images/hello.jpg" alt="#" width="100%" height="100%">
        </div>
        <div class="right-nav">
<ul>
    <li><a href="">Home</a></li>
    <li><a href="">Resources</a></li>
    <li><a href="">Quizzes</a></li>
    <li><a href="">Forum</a></li>
    <li>
        <a href="">
            <button>
                Login
            </button>
        </a>
    </li>
    <li>
        <a href="">
            <button>
                Register
            </button>
        </a>
    </li>
</ul>
        </div>
    </nav>
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
</body>
</html>