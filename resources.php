<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resources</title>
  <style>
    *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
nav img{
  float: left;  
 width: 100px;
 height: 100px;
margin-left: 20px;
margin-top: 5px;
}
nav{

    height: 110px;
background-color: lavender;
}
nav ul{
    float: right;
    position: relative;
    right: 100px;
}

nav ul li{
    display: inline-block;
    list-style-type: none;
    margin: 30px 40px 0px 10px;

}

nav ul li a{
    text-decoration: none;
    color: black;
    cursor: pointer;
    font-size: 1.5rem;
}
.main-block
{
  width: 100%;
  height: 500px;
  margin-bottom: 40px;
  border: 1px solid black;
  display: flex;
  flex-direction: row;

  justify-content: space-between;
align-items: center;
}
.heading1
{
  font-size: 26px;
  font-family: cursive;
  color: indigo;
  padding: 5px;
margin-top: 30px;
}
.box1
{
  width: 30%;
  height: 400px;
  margin-top:30px;
  display: flex;
  flex-direction: column;
border: 1px solid black;

}
.img
{
  width:170px;
  height:170px;
  border:1px solid black;
  margin: auto;
  
}
.topic{
  width: 100%;
  height: 50px;
  border: 1px solid black;
  text-align: center;
}
.summary
{
  width: 100px;
  height: 150px;

  padding: 5px;

}
  </style>
</head>
<body>
  <!-- navbar -->
  <nav>
    <img src="assets/images/meditate.jpg" alt="" id="logo">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="resources.php">Resources</a></li>
      <li><a href="forum.php">Forum</a></li>
      <li><a href="quiz.php">Quizzes</a></li>
      <li><a href="admin/admin.php">About us</a></li>
    </ul>
  </nav>
  <!-- navbar -->
<h1 class="heading1">
  Articles
</h1>
  <div class="main-block">

<div class="box1">
<div class="img">

</div>
<div class="topic">
  
</div>
<div class="summary">
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem vero doloremque veritatis amet a cupiditate, neque, eaque eum, officiis sint fuga. Earum qui necessitatibus possimus esse aut, itaque assumenda, alias dignissimos consectetur saepe, vitae culpa? Aperiam veritatis ab optio velit a sunt inventore. Quo maxime dignissimos velit nihil quae.
</div>
<div class="acces-btn">

</div>

</div>
<div class="box1">


</div><div class="box1">


</div>
  </div>
  <div class="main-block">
    
    </div>
    <div class="main-block">
    
    </div>
</body>
</html>