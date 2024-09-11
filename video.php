<?php
require('connection.php');
?>
<?php
// get page
if(isset($_GET['page3']))
{
  $page3=$_GET['page3'];
}
else{
  $page3=1;
}
// get page

// initialize limit 
$limit3=5; //videos
// initialize limit 

// calculate offset
$offset3=($page3-1)*$limit3;
// calculate offset

// take data from database
// videos
$query3="SELECT * FROM videos LIMIT $offset3,$limit3";
$result3=mysqli_query($con,$query3);
// videos
// take data from database

//extract data from database to check total_record and calculate total_page we can make
// videos
$vquery="SELECT * FROM videos";
$vresult=mysqli_query($con,$vquery);
$trecord3=mysqli_num_rows($vresult);
$tpage3=ceil($trecord3/$limit3);
// videos
//extract data from database to check total_record and calculate total_page we can make

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>videos</title>
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
.video-block
{
  width: 100%;
  height: 231px;
  margin-bottom: 40px;
  border: 1px solid black;
  display: flex;
  flex-direction: column;
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

/* video */

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
  z-index:-5;
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
/* video */

.vudiv
{
    width: 100%;
    height: 89%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}
.vldiv
{
    width: 100%;
  height: 11%;
  display: flex;
  flex-direction: row;
  justify-content: end;
 
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
Videos
</h1>
<div class="main-block video-block">
<div class="vudiv">
      <!-- video div -->
      <?php 
while($data3=mysqli_fetch_assoc($result3))
{
    ?>
      <div class="videos">
       
        <iframe src="<?php echo  $data3['video']; ?>" frameborder="0">
        <a href="video.php" class="video">
          <div class="time">
            <?php echo  $data3['time_interval']; ?>
          </div>
        </a>
    </iframe>

        <div class="video-caption" title="<?php $data3['topic']; ?>">
        <?php echo  $data3['topic']; ?>
        </div>
      </div>
      <?php 
}
      ?>
      <!-- video div -->
      </div>
      <div class="vldiv">
      <?php 
    if($page3>1)
    {
echo '<a href="video.php?page3='.($page3-1).'" class="page-btn prev-btn">Previous</a>';
    }
    for($k=1; $k<=$tpage3; $k++)
    {
      echo '<a href="video.php?page3='.$k.'" class="page-btn pg-num">'.$k.'</a>';
    }
    if($page3<$tpage3)
    {
      echo '<a href="video.php?page3='.($page3+1).'" class="page-btn next-btn">Next</a>';
    }
    ?>
    </div>
    </div>
    <!-- main div for video End -->
</body>
</html>