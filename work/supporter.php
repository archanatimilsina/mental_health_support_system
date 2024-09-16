<?php
require('connection.php');
?>
<?php
// get page
if(isset($_GET['page4']))
{
  $page4=$_GET['page4'];
}
else{
  $page4=1;
}
// get page

// initialize limit 
$limit4=4; //health supporter
// initialize limit 

// calculate offset
$offset4=($page4-1)*$limit4;
// calculate offset

// take data from database
// health supporter
$query4="SELECT * FROM supporters LIMIT $offset4,$limit4";
$result4=mysqli_query($con,$query4);
// health supporter
// take data from database

//extract data from database to check total_record and calculate total_page we can make
// supporter
$squery="SELECT * FROM supporters";
$sresult=mysqli_query($con,$squery);
$trecord4=mysqli_num_rows($sresult);
$tpage4=ceil($trecord4/$limit4);
// supporter
//extract data from database to check total_record and calculate total_page we can make
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supporter</title>
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
.supporter-block
{
  width: 100%;
  height: 310px;
  margin-bottom: 40px;
  border: 1px solid black;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
align-items: center;
}
.sudiv
{
    width: 100%;
    height: 91%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}
.sldiv
{
    width: 100%;
  height: 9%;
  display: flex;
  flex-direction: row;
  justify-content: end;
 
}
.heading1
{
  font-size: 26px;
  font-family: cursive;
  color: indigo;
  padding: 5px;
margin-top: 30px;
}

 /* supporters stlyling */
 .supporter
{
  width: 23%;
  height: 280px;
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
.page-btn
{
    text-decoration: none;
    margin-right: 10px;
    font-size: 20px;
}
.pg-num
{
color: black;

}
.prev-btn
{
    color: black;
   
    background-color: skyblue;
}
.next-btn
{
    color: black;
    background-color: skyblue;

}
 /* supporters stlyling */
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
Suporter
</h1>
<div class="main-block supporter-block">

<div class="sudiv">
  <!-- supporters div -->
  <?php 
    while($data4=mysqli_fetch_assoc($result4))
{
    ?>
    <div class="supporter">
    <div class="sprofile">
<img src="<?php echo $data4['profile'] ;?>" alt="">
    </div>
    <div class="sname">
      <b>
      <?php echo $data4['name'] ;?>
      </b>
    </div>
    <div class="field">
    <?php echo $data4['special_field'] ;?>
    </div>
  </div>
 <?php 
    }
    ?>
    </div>
    <!-- supporters div -->
   <div class="sldiv">
      <?php
if($page4>1)
{
  echo '<a href="supporter.php?page4='.($page4-1).'" class="page-btn prev-btn">Previous</a>';
  
}
for($l=1; $l<=$tpage4; $l++) 
{
  echo '<a href="supporter.php?page4='.$l.'" class="page-btn pg-num">'.$l.'</a>';
}
if($page4<$tpage4)
{
  echo '<a href="supporter.php?page4='.($page4+1).'" class="page-btn next-btn">Next</a>';
  
}
?>
</div>
    </div>
</body>
</html>