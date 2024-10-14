<?php
require('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORUM PANEL</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
.dropdown-content
{
    width: 150px;
    height: 150px;
    display: none;
    position: absolute;
   right: 20px;
    z-index: 1;
}
.paste-button:hover .dropdown-content
{
display: block;
}
.dropdown-content a{
    display: block;
    text-decoration: none;
    background-color: lavender;
    border: 0.09px solid black;
    color: black;
    height: 25%;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 20px;
}
.dropdown-content a:hover{
    background-color: white;
    color: black;
}
        #section1
        {
display: flex;
flex-direction: column;

        }

       
        .box1
        {
            width: 100%;
            height: 80px;
          
            background:lavender;
            position: relative;
        }
    .box1 nav ul li{

    margin: 30px;  
list-style-type: none;

    }
    .box1 nav ul li a button{
       background-color:white;
       color: rgb(7, 7, 7);
       border-radius: 5px;
       width: 150px;
       height: 30px;
       font-size: 17px;
       float: right;
    }
    .post-containeer
        {
            width: 96%;
            margin: auto;
             /* border: 1px solid black;  */
             box-shadow: 0 2px 6px rgba(0,0,0,0.5);
          height: 700px;
           
            margin-top: 40px;
        }
        .post-head
        {
            /* border: 1px solid black; */
            width: 100%;
            height: 20%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            position: relative;
            background-color:lavender ;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        .ph{
            background-color: white;
        }
        .post-body 
        {
            /* border: 1px solid black; */
            width: 100%;
            height: 65%;
            font-size:20px;
            text-align:center;
            font-family:cursive;
            padding: 40px;
        }
        .post-footer
        {
            width: 100%;
            height: 15%;
            /* border: 1px solid black; */
            display: flex;
            flex-direction: row;
            justify-content: center;
            background-color:lavender ;
            box-shadow: 0 -2px 6px rgba(0,0,0,0.15);
        }
        .fh{
            background-color: lavender;
        }
        .hprofile
        {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin: 2px;
            position: relative;

           
        }
        .hprofile img
        {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
        }
        .hname
        {
            width: 20%;
            height:70px;
            position: absolute;
            left: 73px;
            margin-top: 2px;
            display: flex;
            flex-direction: column;
            background-color: inherit;
        }
        .three-dot
        {
            width: 5%;
            height: 25%;
            
           position: absolute;
           top: 35px;
           right: 0px;
           text-align: center;
        background-color: lavender;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .three-dot i{
            font-size: 40px;
        }
.pname
{
width: fit-content;
height: fit-content;
font-size: 20px;
}
.paccount-type
{
    width: fit-content;
    height: fit-content;
    font-size: 14px;
}
.post-time
{
    width: fit-content;
    height: fit-content;
    font-size: 10px;
}
.star
{
   width: 10%;
    height: 100%;
  
    display: flex;
    flex-direction: row;
}
.star-icon
{
    width: 50%;
    height: 100%;
    background-color: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
}
.star-icon i{
    font-size: 40px;
}
#star-count
{
    width: fit-content;
    height: 100%;
background-color: inherit;
font-size: 19px;
font-weight: 200;
font-family: cursive;
display: flex;
    align-items: center;
    justify-content: center;
}
.comment
{
    width: 10%;
    height: 100%;
   
    margin-left: 20px;
    display: flex;
    flex-direction: row;
}
.comment-icon
{
    width: 50%;
    height: 100%;
   display: flex;
   justify-content: end;
   align-items: center;
   background-color: inherit;
  
}
.comment-icon i{
    font-size: 40px;
}
.comment-count
{
    width: fit-content;
    height: 100%;
    background-color: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
font-weight: 200;
font-family: cursive;
}
.threedot
{
    font-size:14px;
}
.profile{

    width: 70px;
    height: 70px;
    border-radius: 50%;
   box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    background-color: white;  
    position: absolute;       
margin-top: -25px;
}
.profile img
{
width: 100%;
height: 100%;
position: absolute;
border-radius: 50%
}
.messageprint
{
    display: flex;
    flex-direction: column;

}
.postimg
{
    width:300px;
    height: 300px;
    margin: auto;
    position: relative;
}
.postimg img{
   width:100%;
   height: 100%;
  

}

    </style>
</head>
<body>
    <section id="section1">
        <div class="main box1">
<nav>

    <ul>
        <li><div class="profile"><img src="assets/images/introvert.jpg" alt="not found"></div></li>
       
        <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
    {
?>
        <li><a href="createpost.php"><button>Create New Post</button></a></li>
        <li>
         <div class="paste-button">  
    <div id="user-icon">
         <i class="fa-solid fa-user"></i>
      </div>
         <div class="dropdown-content">
         <a href="dashboard.php">Dashbord</a>
             <a href="logout.php">Logout</a>
        </div>
    </div>
     </li> 
    <?php
    }
    ?>
    
</ul>
</nav>
    </div>
    
<section class="messageprint">
<?php
$limit=20;
$query1="SELECT * from posts LIMIT $limit";
$result=mysqli_query($con,$query1);
$n=1;
while($data=mysqli_fetch_array($result))
{
$id=$data['id'];
$profile=$data['profile'];
$name=$data['pfullname'];
$username=$data['pusername'];
$posttime=$data['created_at'];
$account_type=$data['account_type'];
$postimg=$data['postimg'];
$post=$data['post'];
$star_count=$data['star'];
$comment=$data['comment'];
?>
    <div class="post-containeer">
        <div class="post-head">
            <div class="ph hprofile">
        <img src="<?php echo $profile;?>" alt="not found">
        </div>
            <div class="ph hname">
                <div class="ainfo pname"><?php echo $name; ?></div>
                <div class="ainfo paccount-type"><?php echo $account_type; ?></div>
                <div class="ainfo post-time"><?php echo $posttime; ?></div>

            </div>
            <div class="ph three-dot">
            <div class="paste-button">  
    <div id="user-icon">
        <i class="fa-solid fa-ellipsis threedot"></i>
      </div>
         <div class="dropdown-content">
             <a href="logout.php?id='<?php echo $id; ?>'">Edit</a>
             <a href="logout.php?id='<?php echo $id; ?>'">Delete</a>
             <a href="logout.php?id='<?php echo $id; ?>'">Report</a>
        </div>
    </div>
        </div>
        </div>
        <div class="post-body">
            <div class="postimg">
<img src="<?php echo $postimg;?>" alt="">
            </div>
            <div class="post">
                <?php echo $post; ?>
            </div>
        </div>
        <div class="post-footer">
            <div class="fh star">
                <div class="star-icon">
                    <i class="fa-solid fa-star fa-sm" style="color: black"  id="star"></i>
                </div>
                <div id="star-count">0</div>
            </div>
            <div class="fh comment">
                <div class="comment-icon"><i class="fa-solid fa-comment fa-sm" style="color: #000000;" onclick="commentcount()"></i></div>
                <div class="comment-count">999</div>
            </div>
        </div>
    </div>
<?php
     $n++;   
}
 ?>
</section>
     </section>
     
     <script>
          let isLiked = false; 
    let likeCount = 0; 
    let starBox = document.getElementById("star");
    let starCountBox = document.getElementById("star-count");

    function updateStarCount() {
        starCountBox.textContent = `${likeCount}`; 
    }

   
    starBox.addEventListener("click", function() {
        if (!isLiked) {
            isLiked = true;
            likeCount++;
            starBox.style.color = "red"; 
        } else {
          
            isLiked = false;
            likeCount--;
            starBox.style.color = "black"; 
        }
        updateStarCount();
    });

    updateStarCount();
     </script>
</body>
</html>
