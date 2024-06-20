<?php
require('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fORUM PANEL</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #section1
        {
display: flex;
flex-direction: column;

        }

       
        .box1
        {
            width: 100%;
            height: 90px;
            border: 1px solid black;
            background:sandybrown;
        }
    .box1 nav ul li{
    /* display: inline-block;   */
    margin: 30px;  
    float: right;
list-style-type: none;
    }
    .box1 nav ul li a button{
       background-color:white;
       color: rgb(7, 7, 7);
       border-radius: 5px;
       width: 150px;
       height: 30px;
       font-size: 17px;
      
    }
    .post-containeer
        {
            width: 96%;
            margin: auto;
            border: 1px solid black;
            height: 250px;
            margin-top: 40px;
        }
        .post-head
        {
            border: 1px solid black;
            width: 100%;
            height: 30%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            position: relative;
            background-color:sandybrown ;
        }
        .ph{
            background-color: white;
        }
        .post-body 
        {
            border: 1px solid black;
            width: 100%;
            height: 60%;
        }
        .post-footer
        {
            width: 100%;
            height: 10%;
            border: 1px solid black;
            display: flex;
            flex-direction: row;
            justify-content: center;
            background-color:sandybrown ;
        }
        .fh{
            background-color: white;
        }
        .hprofile
        {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin: 2px;
            border: 1px solid black; 
        }
        .hname
        {
            width: 20%;
            height:70px;
            border: 1px solid black; 
            position: absolute;
            left: 73px;
            margin-top: 2px;
            display: flex;
            flex-direction: column;
        }
        .three-dot
        {
            width: 5%;
            height: 25%;
            border: 1px solid black; 
           position: absolute;
           top: 35px;
           right: 0px;
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
   /* margin-left: 5px; */
    border: 1px solid black;
    /* margin-top: 3px; */
    display: flex;
    flex-direction: row;
}
.star-icon
{
    width: 50%;
    height: 100%;
    border: 1px solid black;
}
.star-count
{
    width: 50%;
    height: 100%;

    border: 1px solid black;
}
.comment
{
    width: 10%;
    height: 100%;
    border: 1px solid black;
    margin-left: 20px;
    display: flex;
    flex-direction: row;
}
.comment-icon
{
    width: 50%;
    height: 100%;
    border: 1px solid black;
}
.comment-count
{
    width: 50%;
    height: 100%;
    border: 1px solid black;
}
    </style>
</head>
<body>
    <section id="section1">
        <div class="main box1">
<nav>
    <ul>
        <li><a href="createpost.php"><button>Create New Post</button></a></li>
    </ul>
</nav>
    </div>
    
    <div class="post-containeer">
        <div class="post-head">
            <div class="ph hprofile"></div>
            <div class="ph hname">
                <div class="ainfo pname"><?php $name; ?></div>
                <div class="ainfo paccount-type"><?php $account_type; ?></div>
                <div class="ainfo post-time"><?php $posttime; ?></div>

            </div>
            <div class="ph three-dot"><i class="fa-solid fa-three-dots fa-sm"></i></div>
        </div>
        <div class="post-body">
        <?php $post; ?>
        </div>
        <div class="post-footer">
            <div class="fh star">
                <div class="star-icon">
                    <i class="fa-solid fa-star fa-sm"></i>
                </div>
                <div class="star-count"></div>
            </div>
            <div class="fh comment">
                <div class="comment-icon"><i class="fa-solid fa-comment fa-sm" style="color: #63E6BE;" title="Open Chatbox"></i></div>
                <div class="comment-count"></div>
            </div>
        </div>
    </div>
     </section>
</body>
</html>
<?php 

$query1="SELECT * from posts";
$result=mysqli_query($con,$query1);
$data=mysqli_fetch_array($result);
while($data)
{
$fname=$data['pfname'];
$lname=$data['plname'];
$name="$fname"." "."$lname";
$username=$data['pusername'];
$post=$data['post'];
$account_type=$data['account_type'];
$posttime=$data['created_at'];
}
?>