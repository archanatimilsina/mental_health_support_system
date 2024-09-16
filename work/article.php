<?php
require('connection.php');
?>
<?php
// get page
if(isset($_GET['page1']))
{
  $page1=$_GET['page1'];
}
else{
  $page1=1;
}
// get page

// initialize limit 
$limit1=3; //articles
// initialize limit 

// calculate offset
$offset1=($page1-1)*$limit1;
// calculate offset

// take data from database
// articles
$query1="SELECT * FROM articles LIMIT $offset1,$limit1";
$result1=mysqli_query($con,$query1);
// articles
// take data from database

//extract data from database to check total_record and calculate total_page we can make
//articles
$aquery="SELECT * FROM articles";
$aresult=mysqli_query($con,$aquery);
$trecord1=mysqli_num_rows($aresult);
$tpage1=ceil($trecord1/$limit1);
//articles
//extract data from database to check total_record and calculate total_page we can make

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
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
.article-block
{
  width: 100%;
  height: 500px;
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

/* article */

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

.audiv
{
    width: 100%;
    height: 94%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  border: 1px solid green;

}
.aldiv
{
    width: 100%;
  height: 6%;
  display: flex;
  flex-direction: row;
  justify-content: end;
  border: 1px solid red;
 
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
/* article */
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
<div class="main-block article-block">
<div class="audiv">
<!-- articles div -->
<?php
 while($data1=mysqli_fetch_array($result1))
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
      </div>
      <div class="aldiv">
       <?php 
      //  print page numbers
if($page1>1)
{
echo '<a href="article.php?page1='.($page1-1).'" class="page-btn prev-btn">Previous</a>'  ;
}
      for($i=1; $i<=$tpage1; $i++)
      {
echo '<a href="article.php?page1='.$i.'" class="page-btn pg-num">'.$i.'</a>';
      }
      if($page1<$tpage1)
      {
echo '<a href="article.php?page1='.($page1+1).'" class="page-btn next-btn">Next</a>';
      }
      // print page numbers
      ?>
      </div>
    </div>
</body>
</html>