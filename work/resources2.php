<?php 
require('connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
</head>
<style>
     
     *
     {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
     }
.main 
{
  width: 100%;
  height: 500px;
  
  display: flex;
  flex-direction: row;
  
}
.book-profile
{
  width: 80%;
  height: 30%;

  margin: auto;
position: relative;
}
.book-profile img{
  width: 100%;
  height: 100%;
  position: absolute;
}
.book-topic 
{
  width: 100%;
  height: 8%;
  border: 1px solid black;
  text-align: center;
  font-family: cursive;
  font-size: 20px;
  padding: 3px;
}
.book-caption
{
  width: 100%;
  height: 50%;

font-size: 14px;
font-family: cursive;
padding: 5px;

}
.access-btn

{
  width: 140px;
  height: 10%;
 margin: auto;
  margin-top: 5px;
}
.access-btn button{
  width: 100%;
  height: 100%;
  
}
.books
{
  width: 20%;
  height: 400px;
  border: 1px solid black;
  display: flex;
  flex-direction: column;
}
</style>
<style>
.videos
{
  width: 20%;
  height: 200px;
  border: 1px solid black;
  display: flex;
  flex-direction: column;
}
.video{
  border: 1px solid black;
  width: 100%;
  height: 85%;
  display: block;
  position: relative;
}
.time
{
  display: inline-block;
  z-index: 1;
 
  background-color: transparent;
  position: absolute;
bottom: 2px;
right: 2px;
color: black;
}
.video-caption
{
  font-family: 'Times New Roman', Times, serif;

  font-size: 18px;
}
</style>
<style>
  /* supporters stlyling */
.supporter
{
  width: 20%;
  height: 200px;
  display: flex;
  flex-direction: column;
  border: 1px solid black;

}
.sprofile
{
width: 100%;
height: 85%;
border: 1px solid black;
margin: auto;
position: relative;
}
.sprofile img{
  width: 100%;
  height: 100%;
  position: absolute;
}
.sname
{
  width: 100%;
  height: 12%;

font-size: 18px;
text-align: center;
}
.field 
{
  width: 100%;
  height: 13%;
 text-align: center;
  
}
</style>
<body>
  <div class="main">
<div class="books">
  <div class="book-profile">
    <img src="" alt="">
  </div>
  <div class="book-topic">
saya
  </div>
  <div class="book-caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repellendus dolore amet necessitatibus aliquam nostrum debitis consectetur consequuntur porro maxime sed libero, tenetur tempora repellat hic laborum dolores explicabo inventore?50
</div>
  <a href="resorces.php" class="access-btn"><button>access here</button> </a> 
</div>
</div>

<div class="main">
  <div class="videos">
      <a href="resources.php" class="video">
       <div class="time">
       <?php $data3['time_interval']; ?>
       </div>
      </a>
    
    <div class="video-caption" title="<?php $data3['caption']; ?>"><b>sky  is changing</b> </div>
  </div>
 

</div>


<div class="main">
  <div class="supporter">
    <div class="sprofile">
<img src="" alt="">
    </div>
    <div class="sname">
      <b>
        Dr. Sita kumari Timilsina
      </b>
    </div>
    <div class="field">
pshychatrist,sadyfuis
    </div>
  </div>
</div>
</body>
</html>