<?php 
require('connection.php');
?>
<?php 
if($_GET['page'])
{
    $page=$_GET['page'];
}
else{
    $page=1;
}
$limit=10;
$offset=($page-1)*$limit;

$query="SELECT * FROM quizzes LIMIT $offset, $limit";
$result=mysqli_query($con,$query);

$squery="SELECT * FROM quizzes";
$sresult=mysqli_query($con,$squery);
$trecord=mysqli_num_rows($sresult);
$tpage=ceil($trecord/$limit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3</title>
    <style>
          *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .head
        {
            font-size: 3rem;
            border: 1px solid black;
            width: 100%;
            height: 80px;
           justify-content: center;
            display: flex;
            align-items: center;
            font-family: cursive;
        }
        .quizform
        {
              width: 100%;
            height: fit-content;
            display: flex;
            flex-direction: column; 
        }
        .quizbody
        {
width: 80%;
 height: fit-content;
    border: 1px solid black;
    border-radius: 10px;
    margin: auto;
    display: flex;
    flex-direction: column; 
  margin-top: 80px;
        }
        .question
        {
width: 100%;
height: 70%;
margin: auto;
background-color: lavender;
padding: 20px;
font-size: 23px;
justify-content: center;
display: flex;
align-items: center;
border-radius: inherit;
        }
        .answer
        {
            width: 100%;
            height: fit-content;
            border: 1px solid black;
            background-color: white;
        }
        .options
        {
           padding: 10px;
           justify-content: center;
display: flex;
align-items: center;
font-size: 19px;
margin: 20px;
        }
        .options label,input{
            margin:0px 5px;
            justify-content: space-between;
display: flex;

        }
        #submitbtn
        {
            width: 150px;
            height: 50px;
            background-color:lavender;
            color: black;
            border: 1px solid white;
    margin-left: 45%;
    margin-top: 20px;
    margin-bottom: 40px;
            

        }
        .subbtn
        {
            margin: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<form action="#" method="POST" class="quizform" id="quizform">
    <?php 
    $n=$offset;
    while($data=mysqli_fetch_array($result))
    {
    ?>
<div class="quizbody">  
<input class="question" name="<?php echo 'question'.$n; ?>" value="<?php echo $data['question'];?>" readonly></input>
<div class="options">
<label for=""><?php echo $data['option1'];?></label>
<input type="radio" value="<?php echo $data['value1'];?>" name="<?php echo 'answer'.$n; ?>">
<label for=""><?php echo $data['option2'];?></label>
<input type="radio" value="<?php echo $data['value2'];?>" name="<?php echo 'answer'.$n; ?>">
<label for=""><?php echo $data['option3'];?></label>
<input type="radio" value="<?php echo $data['value3'];?>" name="<?php echo 'answer'.$n; ?>">
<label for=""><?php echo $data['option4'];?></label>
<input type="radio" value="<?php echo $data['value4'];?>" name="<?php echo 'answer'.$n; ?>">
</div> 
</div>  
<?php
$n++;
}
?>
<input type="submit" value="Submit Quiz" id="submitbtn" name="submit">
</form>
<?php 
if($page>1)
{
    echo '<a href="quiz2.php?page='.($page-1).'"><button>Previous</button></a>';
}
if($page<$tpage)
{
    echo '<a href="quiz2.php?page='.($page+1).'"><button>Next</button></a>';
}
?>
<script>
    function subbtn()
    {
        const x=document.forms['quizform']['submitbtn'];
        x.style.visibility="hidden";
    }
</script>

</body>
</html>