<?php
require('connection.php');
?>

<?php
// get page
if (isset($_GET['page1'])) {
  $page1 = $_GET['page1'];
} else {
  $page1 = 1;
}
if (isset($_GET['page2'])) {
  $page2 = $_GET['page2'];
} else {
  $page2 = 1;
}

if (isset($_GET['page3'])) {
  $page3 = $_GET['page3'];
} else {
  $page3 = 1;
}
if (isset($_GET['page4'])) {
  $page4 = $_GET['page4'];
} else {
  $page4 = 1;
}
// get page
// initialize limit 
$limit1 = 3; //articles
$limit2 = 4; //books
$limit3 = 3; //videos
$limit4 = 4; //health supporter
// initialize limit
// calculate offset
$offset1 = ($page1 - 1) * $limit1;
$offset2 = ($page2 - 1) * $limit2;
$offset3 = ($page3 - 1) * $limit3;
$offset4 = ($page4 - 1) * $limit4;
// calculate offset
// take data from database
// articles
$query1 = "SELECT * FROM articles LIMIT $offset1,$limit1";
$result1 = mysqli_query($con, $query1);
// articles

// books
$query2 = "SELECT * FROM Books LIMIT $offset2, $limit2";
$result2 = mysqli_query($con, $query2);
// books

// videos
$query3 = "SELECT * FROM videos LIMIT $offset3,$limit3";
$result3 = mysqli_query($con, $query3);
// videos

// health supporter
$query4 = "SELECT * FROM supporters LIMIT $offset4,$limit4";
$result4 = mysqli_query($con, $query4);
// health supporter
// take data from database

//extract data from database to check total_record and calculate total_page we can make

//articles
$aquery = "SELECT * FROM articles";
$aresult = mysqli_query($con, $aquery);
$trecord1 = mysqli_num_rows($aresult);
$tpage1 = ceil($trecord1 / $limit1);
//articles

// books
$bquery = "SELECT * FROM books";
$bresult = mysqli_query($con, $bquery);
$trecord2 = mysqli_num_rows($bresult);
$tpage2 = ceil($trecord2 / $limit2);
// books

// videos
$vquery = "SELECT * FROM videos";
$vresult = mysqli_query($con, $vquery);
$trecord3 = mysqli_num_rows($vresult);
$tpage3 = ceil($trecord3 / $limit3);
// videos

// supporter
$squery = "SELECT * FROM supporters";
$sresult = mysqli_query($con, $squery);
$trecord4 = mysqli_num_rows($sresult);
$tpage4 = ceil($trecord4 / $limit4);
// supporter

//extract data from database to check total_record and calculate total_page we can make
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources4</title>
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
  font-size: 40px;
  font-family: cursive;
  color: indigo;
  padding: 5px;
margin-top: 30px;
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
height: 50px;
border-radius: 60%;
width: 50px;
display: flex;
align-items: center;
justify-content: center;
background-color: lavender;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.6); 
/* margin-top: 10px; */
}
.pg-num:hover{
  background-color: gray;
  color: white;
}
.prev-btn:hover,.next-btn:hover{
  background-color: gray;
  color: white;
}
.prev-btn
{
    color: black;
    display: flex;
align-items: center;
justify-content: center;
    background-color: lavender;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.6); 

height:50px;

padding: 7px;

}
.next-btn
{
  display: flex;
align-items: center;
justify-content: center;
  width: 90px;
    color: black;
    background-color: lavender;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.6); 
height:50px;

}

/* common*/

/* article style */
.article-block
{
  width: 100%;
  height: 600px;
  margin-bottom: 40px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
align-items: center;
background-color: lavender;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); 
}
.articles
{
  width: 30%;
  height: 400px;
  margin-top:30px;
  display: flex;
  flex-direction: column;
background-color: white;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); 
}
.img
{
  width:170px;
  height:170px;
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
   display: flex;
  align-items: center;
  justify-content: center; 
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); 
  background-color: gray;
  font-size: 28px;
color: white;
}
.summary
{
  width: 100%;
  height: 150px;
  padding: 5px;
  background-color: lavender

}

.audiv
{
    width: 100%;
    height: 81%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
 align-items: center;

}
.aldiv
{  
  display: flex;
  flex-direction: row;
  justify-content: end;
  align-items: center;
   background-color: white; 
  margin: auto; 
   width: 80%;
  height: 14%;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}
/* article style */

/* book style */
.book-block
{
  width: 100%;
  height:600px;
  margin-bottom: 40px;
  border: 1px solid black;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: lavender;

}

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
display: flex;
justify-content: center;
align-items: center;
  font-size: 24px;
  padding: 3px;
  background-color: gray;
  color: white;
  
}
.book-caption
{
  width: 100%;
  height:30%;
font-size: 20px;

padding: 5px;

}
.access-btn
{
  width: 140px;
  height: 12%;
 margin: auto;
  margin-top: 5px;
  margin-bottom: 10px
}
.access-btn button{
  width: 150px;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
height: 100%;
margin-bottom: 20px;
background-color: white;
}
.access-btn button:hover{
  background-color: gray;
  color: white;
  border: 1pxs solid black;
  cursor: pointer;
}
.books
{
  width: 20%;
  height: 90%;
  display: flex;
  flex-direction: column;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);

}

.budiv
{
    width: 100%;
    height: 90%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
}
.bldiv
{
  display: flex;
  flex-direction: row;
  justify-content: end;
  align-items: center;
  background-color: white; 
  margin: auto; 
   width: 80%;
  height: 16%;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  margin-bottom: 10px; 
 
}
/* book style */

/* video style */
.video-block
{
  width: 100%;
  height: 500px;
  margin-bottom: 40px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
background-color: lavender;
}
.videos
{
  width: 28%;
  height: 90%;
background-color: white;
  display: flex;
  flex-direction: column;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}
.videos video{
  height: 80%;
}
.videos video:hover{
  cursor: pointer;
}
.video{
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  position: relative;
  z-index:-5;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
 
}

.time
{
  display: inline-block;
  z-index: 10;
  background-color: transparent;
  position: absolute;
bottom: 2px;
right: 2px;
color: black;
}
.video-caption
{
  font-family: 'Times New Roman', Times, serif;
background-color: lavender;
  font-size: 20px;
  height: 20%;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
 

  

}
.vudiv
{
    width: 100%;
    height: 85%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
}
.vldiv
{
   
  display: flex;
  flex-direction: row;
  justify-content: end;
  align-items: center;
  background-color: white; 
  margin: auto; 
   width: 80%;
  height: 21%;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
margin-bottom: 10px;
 
}
/* video style */


/* supporter style */
.supporter-block
{
  width: 100%;
  height:400px ;
  margin-bottom: 40px;
  
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  background-color: lavender;
}

.supporter
{
  width: 23%;
  height: 280px;
  display: flex;
  flex-direction: column;

  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}
.sprofile
{
width: 100%;
height: 85%;

margin: auto;
position: relative;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
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
.sudiv
{
    width: 100%;
    height: 85%;
    display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
}
.sldiv
{
 
  display: flex;
  flex-direction: row;
  justify-content: end;
  align-items: center;
  background-color: white; 
  margin: auto; 
   width: 80%;
  height: 18%;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
margin-bottom: 10px;
 
}

/*  Footer  */ 

#footer
{
    margin-top: 50px;
}
.footer{
    background-color: #222;
    padding: 5rem 1rem;
    line-height: 2rem;
    margin-top: 600px;

}

.footer-center{
    margin-right: 1rem;

}

.footer-container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    color: #fff;
}

.footer-center a:link,
.footer-center a:visited{
    display: block;
    color: #f1f1f1;
    font-size: 1.4rem;
    transition: 0.6s;
}

.footer-center a:hover{
    color: #f60091;
}
.footer-center p{
    font-size: 20px;
}

.footer-center div{
    color: #f1f1f1;
    font-size: 1.4rem;
}

.footer-center h3{
    font-size: 1.8rem;
    font-weight: 400;
    margin-bottom: 1rem;
}
/* footer */
/* supporter style */
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

  <!-- article -->

  <h1 class="heading1">
Articles
</h1>
<div class="main-block article-block">
<div class="audiv">
<!-- articles div -->
<?php
while ($data1 = mysqli_fetch_array($result1)) {
  ?>
  <div class="articles">
    <div class="img">
      <img src="<?php echo $data1['profile']; ?>" alt="">
      </div>
      <div class="topic">
      <?php echo $data1['writer']; ?>
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
       if ($page1 > 1) {
         echo '<a href="resources.php?page1=' . ($page1 - 1) . '" class="page-btn prev-btn" data-page="' . ($page1 - 1) . '">Previous</a>';
       }
       for ($i = 1; $i <= $tpage1; $i++) {
         echo '<a href="resources.php?page1=' . $i . '" class="page-btn pg-num" data-page="' . ($i) . '">' . $i . '</a>';
       }
       if ($page1 < $tpage1) {
         echo '<a href="resources.php?page1=' . ($page1 + 1) . '" class="page-btn next-btn" data-page="' . ($page1 + 1) . '">Next</a>';
       }
       // print page numbers
       ?>
      </div>
    </div>
  <!-- article -->

  <!-- book -->

  <h1 class="heading1">
Books
</h1>
<div class="main-block book-block">
<div class="budiv">
 <!-- book div -->
 <?php
 while ($data2 = mysqli_fetch_assoc($result2)) {
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
    if ($page2 > 1) {
      echo '<a href="resources.php?page2=' . ($page2 - 1) . '" class="page-btn prev-btn" data-page="' . ($page2 - 1) . '">Previous</a>';
    }
    for ($j = 1; $j <= $tpage2; $j++) {
      echo '<a href="resources.php?page2=' . $j . '" class="page-btn pg-num" data-page="' . ($j) . '">' . $j . '</a>';
    }
    if ($page2 < $tpage2) {
      echo '<a href="resources.php?page2=' . ($page2 + 1) . '" class="page-btn next-btn" data-page="' . ($page2 + 1) . '">Next</a>';
    }
    ?>
</div>
    </div>
  <!-- book -->

  <!-- video -->
   
<h1 class="heading1">
Videos
</h1>
<div class="main-block video-block">
<div class="vudiv">
      <!-- video div -->
      <?php
      while ($data3 = mysqli_fetch_assoc($result3)) {
        ?>
        <div class="videos">
        <video controls frameborder="0">
  <source src="" type="video/mp4">
 <a href="video.php" class="video">
            <div class="time">
              <?php echo $data3['time_interval']; ?>
            </div>
          </a>
</video> 

          <!-- <iframe src="" frameborder="0">
          
      </iframe> -->
          <div class="video-caption" title="<?php $data3['topic']; ?>">
          <?php echo $data3['topic']; ?>
          </div>
        </div>
      <?php
      }
      ?>
      <!-- video div -->
      </div>
      <div class="vldiv">
      <?php
      if ($page3 > 1) {
        echo '<a href="resources.php?page3=' . ($page3 - 1) . '" class="page-btn prev-btn" data-page="' . ($page3 - 1) . '">Previous</a>';
      }
      for ($k = 1; $k <= $tpage3; $k++) {
        echo '<a href="resources.php?page3=' . $k . '" class="page-btn pg-num" data-page="' . ($k) . '">' . $k . '</a>';
      }
      if ($page3 < $tpage3) {
        echo '<a href="resources.php?page3=' . ($page3 + 1) . '" class="page-btn next-btn" data-page="' . ($page3 + 1) . '">Next</a>';
      }
      ?>
    </div>
    </div>
  <!-- video -->

  <!-- supporter -->

  <h1 class="heading1">
Suporter
</h1>
<div class="main-block supporter-block">

<div class="sudiv">
  <!-- supporters div -->
  <?php
  while ($data4 = mysqli_fetch_assoc($result4)) {
    ?>
      <div class="supporter">
      <div class="sprofile">
  <img src="<?php echo $data4['profile']; ?>" alt="">
      </div>
      <div class="sname">
        <b>
        <?php echo $data4['name']; ?>
        </b>
      </div>
      <div class="field">
      <?php echo $data4['special_field']; ?>
      </div>
    </div>
 <?php
  }
  ?>
    </div>
    <!-- supporters div -->
   <div class="sldiv">
      <?php
      if ($page4 > 1) {
        echo '<a href="resources.php?page4=' . ($page4 - 1) . '" class="page-btn prev-btn" data-page="' . ($page4 - 1) . '">Previous</a>';

      }
      for ($l = 1; $l <= $tpage4; $l++) {
        echo '<a href="resources.php?page4=' . $l . '" class="page-btn pg-num" data-page="' . ($l) . '">' . $l . '</a>';
      }
      if ($page4 < $tpage4) {
        echo '<a href="resources.php?page4=' . ($page4 + 1) . '" class="page-btn next-btn" data-page="' . ($page4 + 1) . '">Next</a>';

      }
      ?>
</div>
    </div>
  <!-- supporter -->

  <!-- footer -->
<section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>The majority of independent <br> properties are losing out <br> on a lot of business for <br> one very simple reason: <br> their hotel websites are poorly <br> designed.</p>
                </div>
                <div class="footer-center">
                    <h3>USEFUL LINKS</h3>
                    <a href="index.php">Home</a>
                    <a href="food.php">Food</a>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="feedback.php">Feedback</a>

                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>Sudal-9,Bhaktapur <br>9806531378<br>www.swiftstay.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        
                        Sun: 6AM-10PM
                    </div>
                  
                    <div>
                       
                       Mon-wed: 8AM-9PM
                    </div>
                    <div>
                       Thu: 7AM-10PM
                    </div>
                    <div>
                   Fri & Sat: 5AM-11PM
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- footer -->
   <script>
//  $(document).ready(function () {
//   $('.pagination').on('click', function () {
//     // Get the page number from data attribute
//     const page = $(this).data('page');
    
//     // Select the container where you want to load the data
//     const $container = $('.book-profile'); // Replace with your actual container class

//     // Simulate page reload by changing the URL with the selected page
//     window.location.href = `resources.php?page=${page}`;
//   });
// });

   </script>
</body>
</html>
