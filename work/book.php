<?php
require('connection.php');
?>
<?php
// get page
if(isset($_GET['page2']))
{
  $page2=$_GET['page2'];
}
else{
  $page2=1;
}
// get page

// initialize limit 
$limit2=4; //books
// initialize limit 

// calculate offset
$offset2=($page2-1)*$limit2;
// calculate offset

// take data from database
// books
$query2="SELECT * FROM Books LIMIT $offset2, $limit2";
$result2=mysqli_query($con,$query2);
// books

// take data from database

//extract data from database to check total_record and calculate total_page we can make
// books
$bquery="SELECT * FROM books";
$bresult=mysqli_query($con,$bquery);
$trecord2=mysqli_num_rows($bresult);
$tpage2=ceil($trecord2/$limit2);
// books
//extract data from database to check total_record and calculate total_page we can make
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
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
.book-block
{
  width: 100%;
  height: 350px;
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

/* book */

.book-profile
{
  width: 80%;
  height: 50%;
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
  height: 10%;
  border: 1px solid black;
  text-align: center;
  font-family: cursive;
  font-size: 20px;
  padding: 3px;
}
.book-caption
{
  width: 100%;
  height:40%;
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
  
}
.books
{
  width: 20%;
  height: 100%;
  border: 1px solid black;
  display: flex;
  flex-direction: column;

}

.budiv
{
    width: 100%;
    height: 91%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}
.bldiv
{
    width: 100%;
  height: 8%;
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
/* book */
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
Books
</h1>
<div class="main-block book-block">
<div class="budiv">
 <!-- book div -->
 <?php 
     while($data2=mysqli_fetch_assoc($result2))
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
    <!-- </div> -->
    <?php 
     }
    ?>
    <!-- book div -->
    </div>
   <div class="bldiv">
    <?php 
  if($page2>1)
  {
    echo '<a href="book.php?page2='.($page2-1).'" class="page-btn prev-btn">Previous</a>';
  }
  for($j=1; $j<=$tpage2; $j++)
  {
    echo '<a href="book.php?page2='.$j.'" class="page-btn pg-num">'.$j.'</a>';
  }
  if($page2<$tpage2)
  {
echo '<a href="book.php?page2='.($page2+1).'" class="page-btn next-btn">Next</a>';
  }
  ?>
</div>
    </div>
</body>
</html>