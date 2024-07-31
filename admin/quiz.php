<?php  require("../connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quiz</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script></style>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
    {
        
        background: url("../assets/images/f.jpg") no-repeat;
        background-position: center;
        background-size: cover;
    }
        .addquiz
        {
            width: 80%;
            height:550px;
            margin: auto;
            margin-top:70px;
            margin-bottom: 70px;
            background-color: white;
             box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2); 
             border: 3px solid white;
             border-radius: 20px;

        }
        .addquiz form{
            width: 100%;
            height: 100%;
            padding: 20px;
        }
        #optionlabel
        {
     font-size: 20px;
font-family: cursive;
        }
   
        #questioninput
        {
            width: 80%;
            margin: auto;
            height: 70px;
            display: block;
            margin-top: 40px;
           border: 1px dotted blue ;
            font-size: 19px;
            margin-bottom: 30px;
        }
        #questioninput::placeholder
        {
font-size: 25px;
text-align: center;
        }
        .addquiz form h1{
            text-align: center;
            font-family: cursive;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .subbtn
        {
            background-color: lavender;
            width: 150px;
            height: 50px;
            display: block;
            margin: auto;
            margin-top: 40px;
            font-size: 1.2rem;

        }
        .addoptions
        {
            display: inline-block;
        }
        .addoptions{
          position: relative;
          margin: auto;
          display: inline-block;
         margin-left: 30px;
        }
       .circle-plus{
            font-size: 20px;
        }
        .circle-plus:hover{
font-size: 22px;
        }
    

        .optionValue
        {
            margin: 10px;
            height: 30px;
            border: 1px solid black;
          

        }
        .optionName
        {
            margin-left: 30px;
            height: 30px;
            border: 1px solid black;
        }
        .optionName,.optionValue::placeholder
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="addquiz">
        <form action="#" method="post">
            <h1>Add Your Quiz Here</h1>
            <input type="text" placeholder="Write Question Here" name="question" id="questioninput">
            <label for="Options" id="optionlabel">options(atmost 4 options)</label><br>
            <input type="text" class="optionName" placeholder="Option name" name="option1">
            <input type="text" class="optionValue" placeholder="Option Value" name="value1">
            <br>
            <input type="text" class="optionName" placeholder="Option name" name="option2">
            <input type="text" class="optionValue" placeholder="Option Value" name="value2">
            <br>
            <input type="text" class="optionName" placeholder="Option name" name="option3">
            <input type="text" class="optionValue" placeholder="Option Value" name="value3">
            <br>
            <input type="text" class="optionName" placeholder="Option name" name="option4">
            <input type="text" class="optionValue" placeholder="Option Value" name="value4">
    <input type="submit" value="Add Quiz" class="subbtn" name="submit">
        </form>
    </div>
    <?php
    if(isset($_POST['submit']))
        {
$question=$_POST['question']; 
$option1=$_POST['option1'];
$value1=$_POST['value1'];
$option2=$_POST['option2'];
$value2=$_POST['value2'];
$option3=$_POST['option3'];
$value3=$_POST['value3'];
$option4=$_POST['option4'];
$value4=$_POST['value4'];


$query="INSERT INTO quizzes (question,option1,value1,option2,value2,option3,value3,option4,value4) VALUES ('$question','$option1','$value1','$option2','$value2','$option3','$value3','$option4','$value4')";
$result=mysqli_query($con,$query);

if($result)
{
    echo" <script>
    alert('data passed successfully');
    window.location.href='quiz.php';
    </script>";
}
else{
    echo" <script>
    alert('Try Again');
    </script>";
}

        }
        ?>
</body>
</html>
<?php 
