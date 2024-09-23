<?php 
require('connection.php');
?>
<?php 
if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else
{
    $page=1;
}
$limit=1;
$offset=($page-1)*$limit;
$query="SELECT * FROM qna LIMIT $offset, $limit";
$result=mysqli_query($con,$query);

$squery="SELECT * FROM qna";
$sresult=mysqli_query($con,$squery);
$trecord=mysqli_num_rows($sresult);
$tpage=ceil($trecord/$limit);
$n=$page-1;
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QNA</title>
        <style>
        
        .qna-box
        {
            width: 90%;
            height:200px;
            margin: auto;
         border: 1px solid black;
            border-radius: 10px;
            margin-top: 80px;
        }
        .qna-box form{
           
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
           
        }
        .question-box
        {
         
            height: 30%;  
            border-radius: 10px;
            background-color: lavender;
            width: 97.7%;
            display: flex;
            justify-content: center;
            align-items: center;
font-size:25px;
padding: 10px;
        }
        .answer-box
        {
            width: 99.3%;
           height: 70%;
        }
        .prev-btn
        {
            border: 1px solid black;
            width: 70px;
height: 30px;
display: flex;
align-items: center;
justify-content: center;
            background-color: lavender;
        }
        .next-btn
        {
            border: 1px solid black;
            
width: 70px;
height: 30px;
display: flex;
align-items: center;
justify-content: center;
            background-color: lavender;
        }
        .page-btn
        {
            border: 1px solid black;
            border-radius: 50%;
            width: 30px;
  height: 30px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
            background-color: lavender;
        }
        .prev-btn, .page-btn,.next-btn{
            text-decoration: none;
            color: black;
        }
        .pagination
        {
            margin: auto;
            width: 80%;
            height: 50px;
            display: flex;
            justify-content: end;
            align-items: center;
        }
        .head p{
            text-align: center;
            color: black;
            font-size: 40px;
            font-family: cursive;
        }
    </style>
    </head>
    <body>
        <div class="head">
           <p>Please answer the following question</p>
        </div>
        <?php
while($data=mysqli_fetch_array($result))
{ ?>
      <div class="qna-box">
    <form action="" method="POST">
    <input type="text" readonly name="<?php echo 'question'.$n; ?>" class="question-box" value="<?php  echo $data['questions']; ?>">
    <input type="text" name="<?php echo 'answer'.$n; ?>" class="answer-box">

       </div> 
       <div class="pagination">
        <?php         
}
if($page>1)
{
    echo '<a href="qna.php?page='.($page-1).'" class="prev-btn">Previous</a>'.'&nbsp'.'&nbsp'.'&nbsp';
}
for($i=1; $i<5; $i++)
{
    echo '<a href="qna.php?page='.$i.'" class="page-btn">'.$i.'</a>'.'&nbsp'.'&nbsp'.'&nbsp';
}
if($page<$tpage)
{
    echo '<a href="qna.php?page='.($page+1).'" class="next-btn"><input type="submit" name="next" value="Next" onclick="arry()"></a>';
} 
?>
</form>
 
<?php
if(isset($_POST['next']))
{
        
            $questionpost='question'.$n;
            $question=$_POST[$questionpost];
            $answerpost='answer'.$n;
            $answer=$_POST[$answerpost];
            ?>
  
 <?php
}
?>
 </div>
  <script>

function arry()
{
let questiontop=<?Php echo $question; ?>;
alert(questiontop);
// let answertop=<?php echo $answer; 
// const question=new array(<?php echo $tpage; ?>);
// const answer=new array(<?php  echo $tpage;?>);
// let page=<?php echo $page;?>;
// let tpage=<?php echo $tpage;?>;


}
 </script>
    </body>
    </html>
   
  
