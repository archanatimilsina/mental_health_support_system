<?php  require('connection.php'); ?>
<?php 
if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else{
    $page=1;

}
$limit=10;
$offset=($page-1)*$limit;
$query="SELECT * FROM quiz LIMIT $offset,$limit";
$result=mysqli_query($con,$query);
$squery = "SELECT * FROM quiz";
$sresult = mysqli_query($con, $squery);
$trecord = mysqli_num_rows($sresult);
$tpage = ceil($trecord / $limit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
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
        #question
        {
width: 100%;
height: 70%;
border: 1px solidred;
background-color: sandybrown;
padding: 20px;
font-size: 23px;
justify-content: center;
display: flex;
align-items: center;
border-radius: inherit;
        }
        #answer
        {
            width: 100%;
            height: fit-content;
            border: qpx solid black;
          
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
            background-color:sandybrown;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 46%;
            color: black;
            border: 1px solid white;
           

        }
    

    </style>
</head>
<body>
<div class="head">
    Take The mental Quiz
   </div>
   <form action="#" method="POST" class="quizform">
   <?php
   $n=0;
   while ($data = mysqli_fetch_array($result)) { ?>
   <div class="quizbody">  
<div class="question" id="question">
<?php
echo  $data['question'];
?>
</div>
<div class="options" id="answer">
    <input type="radio" value="20%" name="answer<?php echo $n; ?>">
    <label for=""><?php echo  $data['option1'];  ?></label>
    <input type="radio" value="30%" name="answer<?php  echo $n;?>">
    <label for=""><?php echo  $data['option2'];  ?></label>
    <input type="radio" value="40%" name="answer<?php echo $n; ?>">
    <label for=""><?php echo  $data['option3'];  ?></label>
    <input type="radio" value="50%" name="answer<?php echo $n; ?>">
    <label for=""><?php echo  $data['option4'];  ?></label>
    <input type="radio" value="70%" name="answer<?php  echo $n;?>">
    <label for=""><?php echo  $data['option5'];  ?></label>
</div>  
</div>
<?php
$n++;
   }
   ?>
<div class="pagination">
<?php
if($page>1)
{
    ?>
  <button type="button" id="prev-btn" onclick="GoToPage(<?php echo ($page - 1); ?>)">Previous</button>
    <?php
}
?>
  <?php if ($page < $tpage) { ?>
    <div class="subbtn"></div>
                <button type="button" id="next-btn" onclick="SaveAndNext(<?php echo ($page + 1); ?>)">Next</button>
</div>
            <?php } else { ?>
                <button type="button" id="submit-btn" onclick="SubmitAll()">Submit All</button>
            <?php } ?>

    </div>
</form>
<script>
$question=[];
$answer=[];
const prevbtn=document.getElementById('prev-btn');
const nextbtn=document.getElementById('next-btn');
const submitbtn=document.getElementById('submit-btn');
let tpage=<?php echo $tpage; ?>;






// function SaveAndNext(page)
// {
//     const question=document.getElementById('question');
//     const answer=document.getElementById("answer");
//     console.log(question);
//     console.log(answer);
// }

</script>
</body>
</html>