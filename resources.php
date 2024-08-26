<?php include('connection.php'); 
// get page
if($_GET['page1'])
{
  $page1=$_GET['page1'];
  
}
else{
  $page1=1;
}
if($_GET['page2'])
{
  $pgae2=$_GET['page2'];
}
else{
  $page2=1;
}

if($_GET['page3'])
{
  $page3=$_GET['page3'];
}
else{
  $page3=1;
}
if($_GET['page4'])
{
  $page4=$_GET['page4'];
}
else{
  $page4=1;
}
// get page

// initialize limit 
$limit1=3; //articles
$limit2=4; //books
$limit3=5; //videos
$limit4=4; //health supporter
// initialize limit

// calculate offset
$offset1=($page1-1)*$limit1;
$offset2=($page2-1)*$limit2;
$offset3=($page3-1)*$limit3;
$offset4=($page4-1)*$limit4;
// calculate offset

// take data from database
// articles
$query1="SELECT * FROM articles LIMIT $offset1,$limit1";
$result1=mysqli_query($con,$query1);
// articles

// books
$query2="SELECT * FROM Books LIMIT $offset2, $limit2";
$result2=mysqli_query($con,$query2);
// books

// videos
$query3="SELECT * FROM videos LIMIT $offset3,$limit3";
$result3=mysqli_query($con,$query3);
// videos

// health supporter
$query4="SELECT * FROM supporter LIMIT $offset4,$limit4";
$result4=mysqli_query($con,$query4);
// health supporter
// take data from database
?>
<?php
//extract data from database to check total_record and calculate total_page we can make

//articles
$aquery="SELECT * FROM articles";
$aresult=mysqli_query($con,$aquery);
$trecord1=mysqli_num_rows($aresult);
$tpage1=ceil($trecord1/$limit1);
//articles

// books
$bquery="SELECT * FROM books";
$bresult=mysqli_query($con,$bquery);
$trecord2=mysqli_num_rows($bresult);
$tpage2=ceil($trecord2/$limit2);
// books

// videos
$vquery="SELECT * FROM videos";
$vresult=mysqli_query($con,$vquery);
$trecord3=mysqli_num_rows($vresult);
$tpage3=ceil($trecord3/$limit3);
// videos

// supporter
$squery="SELECT * FROM supporter";
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
  position: relative;

}
.img img{
  position: absolute;
  width: 170px;
  height: 170px;

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
<!-- box 1 -->
 <?php
 while($data1=mysqli_fetch_array($result1))
 {
 ?>
<div class="box1">
  <div class="img">
    <img src="<?php $data['profile']; ?>" alt="">
    </div>
    <div class="topic">
    <?php $data1['writer'];  ?>
      </div>
      <div class="summary">
        <p><?php $data1['content']; ?></p>
        </div>
      </div> 
     
    <?php
    }
    ?>
      <!-- box 1 -->
       <?php 
      //  print page numbers
if($page1>1)
{
echo '<a href="resources.php?page1='.($page1-1).'" class="prev-btn">Previous</a>'  ;
}
      for($i=1; $i<=$tpage1; $i++)
      {
echo '<a href="resources.php?page1='.$i.'" class="page-btn">'.$i.'</a>';
      }
      if($page1<$tpage1)
      {
echo '<a href="resources.php?page1='.($page1+1).'" class="next-btn">Next</a>';
      }
      // print page numbers
       ?>
  </div>
  <div class="main-block">
  <?php 
  if($page2>1)
  {
    echo '<a href="resources.php?page2='.($page2-1).'" class="prev-btn">Previous</a>';
  }
  for($j=1; $j<=$tpage2; $j++)
  {
    echo '<a href="resources.php?page2='.$j.'" class="page-btn">'.$j.'</a>';
  }
  if($page2<$tpage2)
  {
echo '<a href="resources.php?page2='.($page2+1).'" class="next-btn">Next</a>';
  }
  ?>
    </div>
    <div class="main-block">
    <?php 
    if($page3>1)
    {
echo '<a href="resources.php?page3='.($page3-1).'" class="prev-btn">Previous</a>';
    }
    for($k=1; $k<=$tpage3; $k++)
    {
      echo '<a href="resources.php?page3='.$k.'" class="page-btn">'.$k.'</a>';
    }
    if($page3<$tpage3)
    {
      echo '<a href="resources.php?page3='.($page3+1).'" class="next-btn">Next</a>';
    }
    ?>
    </div>
    <div class="main-block">
<?php
if($page4>1)
{
  echo '<a href="resources.php?page4='.($page4-1).'" class="prev-btn">Previous</a>';

}
for($l=1; $l<=$tpage4; $l++) 
{
  echo '<a href="resources.php?page3='.$l.'" class="page-btn">'.$l.'</a>';
}
if($page4<$tpage4)
{
  echo '<a href="resources.php?page4='.($page4+1).'" class="next-btn">Next</a>';

}
?>
    </div>
</body>
</html>
