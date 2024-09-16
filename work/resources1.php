<?php include('connection.php'); 
// get page
if(isset($_GET['page1']))
{
  $page1=$_GET['page1'];
}
else{
  $page1=1;
}
if(isset($_GET['page2']))
{
  $page2=$_GET['page2'];
}
else{
  $page2=1;
}

if(isset($_GET['page3']))
{
  $page3=$_GET['page3'];
}
else{
  $page3=1;
}
if(isset($_GET['page4']))
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
$query4="SELECT * FROM supporters LIMIT $offset4,$limit4";
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
  <title>Resources</title>
  <style>
    /* common */
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
.heading1
{
  font-size: 26px;
  font-family: cursive;
  color: indigo;
  padding: 5px;
margin-top: 30px;
}
/* common*/

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

.articles
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
  display:inline-block;
}

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
<!-- articles div -->
<?php
 while($data1=mysqli_fetch_array($aresult))
 {
 ?>
<div class="articles">
  <div class="img">
    <img src="<?php echo $data1['profile']; ?>" alt="">
    </div>
    <div class="topic">
    <?php echo $data1['writer'];  ?>
      </div>
      <div class="summary">
        <p><?php echo $data1['content']; ?></p>
        </div>
      </div> 
     
    <?php
    }
    ?>
      <!-- article div -->
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



  <!-- main div for book start -->
  <div class="main-block">
    <!-- book div -->
     <?php 
     while($data2=mysqli_fetch_assoc($bresult))
     {
     ?>
    <div class="books">
      <div class="book-profile">
        <img src="<?php echo $data2['profile']; ?>" alt="it's okay">
      </div>
      <div class="book-topic">
      <?php echo $data2['topic']; ?>
      </div>
      <div class="book-caption">
        <?php echo $data2['caption']; ?>
        </div>
        <a href="resorces.php" class="access-btn"><button>Access here</button> </a> 
      </div>
    </div>
    <?php 
     }
    ?>
    <!-- book div -->
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
<!-- main div for book end -->


    <!-- main div for video start -->
    <div class="main-block">
      
      <!-- video div -->
    <?php 
while($data3=mysqli_fetch_assoc($vresult))
{
    ?>
      <div class="videos">
        <a href="resources.php" class="video">
          <div class="time">
            <?php echo  $data3['time_interval']; ?>
          </div>
        </a>
        <div class="video-caption" title="<?php $data3['caption']; ?>"><b>sky  is changing</b> </div>
      </div>
      <?php 
}
      ?>
      <!-- video div -->
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
    <!-- main div for video End -->



    <!-- main div for supproters start -->
    <div class="main-block">
    <!-- supporters div -->

    <?php 
    while($data4=mysqli_fetch_assoc($sresult))
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
    <?php echo $data4['special_area'] ;?>
    </div>
  </div>
 <?php 
    }
    ?>
    <!-- supporters div -->
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
    <!-- main div for supproters End-->


  </body>
  </html>
