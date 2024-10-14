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
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Baloo 2', cursive;
    background-color: #f4f4f9;
}

#section1 {
    display: flex;
    flex-direction: column;
}

.main {
    width: 100%;
    background-color: lavender;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.box1 nav ul {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 30px;
    list-style-type: none;
}

.box1 nav ul li {
    margin: 0 15px;
}

.box1 nav ul li a button {
    background-color: white;
    color: rgb(7, 7, 7);
    border-radius: 5px;
    padding: 8px 20px;
    font-size: 17px;
    border: 1px solid #ddd;
    cursor: pointer;
}

.box1 nav ul li a button:hover {
    background-color: #ddd;
}

/* Dropdown */
.paste-button {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: lavender;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.paste-button:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    padding: 10px 20px;
    display: block;
    text-decoration: none;
    background-color: lavender;
    color: black;
    border-bottom: 1px solid #ddd;
}

.dropdown-content a:hover {
    background-color: white;
}

/* Post Container */
.post-containeer {
    width: 96%;
    margin: 20px auto;
    background-color: white;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
}

.post-head, .post-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: lavender;
}

.post-body {
    padding: 20px;
    font-size: 20px;
    text-align: center;
    font-family: cursive;
}

.postimg {
    width: 100%;
    max-width: 500px;
    height: 300px;
    margin: 0 auto;
}

.postimg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

/* Profile */
.hprofile {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
}

.hprofile img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hname {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.ainfo {
    margin: 5px 0;
}

.star, .comment {
    display: flex;
    align-items: center;
}

.star-icon, .comment-icon {
    cursor: pointer;
}

.star-icon i, .comment-icon i {
    font-size: 25px;
}

#star-count, .comment-count {
    font-size: 18px;
    margin-left: 5px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .box1 nav ul {
        flex-direction: column;
    }

    .postimg {
        height: auto;
    }

    .post-body {
        font-size: 18px;
        padding: 10px;
    }

    .post-footer {
        flex-direction: column;
    }
}


    </style>
</head>
<body>
    <section id="section1">
        <div class="main box1">
<nav>

    <ul>
        <li><div class="profile"><img src="" alt="not found"></div></li>
       
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
$query1="SELECT * from posts";
$result=mysqli_query($con,$query1);
$n=1;
while($data=mysqli_fetch_array($result))
{
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
             <a href="forumedit.php">Edit</a>
             <a href="forumdelete.php">Delete</a>
             <a href="forumreport.php">Report</a>
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
