<?php
require("../connection.php");
if(isset($_POST['submit']))
{
    //hello1
    echo '<script>alert("i am here")</script>';
    // hello1
    $question=$_POST['question'];
    $query="INSERT INTO qna (questions) values('$question')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo '<script>alert("Data is inserted Successfully")</script>';
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
    <style>
    body:not(.questions) {
    background-color: lavender;
}
 
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #heading
        {
            text-align: center;
        }
        .questions
        {
            border: 1px dotted gray;
            width: 90%;
            height: auto;
            padding-bottom: 20px;
            margin-top: 50px;
        }
        .questions form{
            width: 100%;
            height: 100%;
        }
#questionBox
{
    width: 100%;
   height: ;
}
#questionBox::placeholder{
    font-size: 20px;
}
#submit-btn
{
    width: 150px;
    height: 40px;
margin-top: 30px;
}
   </style>
</head>
<body>
   <div class="container questions">
<form action="" method="POST">
<h1 id="heading">
    Add questions
</h1>
<textarea id="questionBox" name="question" placeholder="Enter the Question Here"></textarea>
<button type="submit" class="btn btn-primary" id="submit-btn" name="submit">Submit</button>
</form>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    const input= document.getElementById("questionBox");
    input.addEventListener("input", function() {
  this.style.height = "auto";
  // Reset height
  this.style.height = this.scrollHeight + "px"; // Set to scroll height
});
</script>
</body>
</html>