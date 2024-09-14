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
        .addquiz
        {
            width: 80%;
            height:fit-content;
            margin: auto;
            border: 1px solid black;
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
display: block;
margin-bottom: 10px;
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
            background-color: sandybrown;
            width: 100px;
            height: 40px;
            display: block;
            margin: auto;
            margin-top: 40px;

        }
       
        .addoptions{
          position: relative;
          margin: auto;
          display: inline-block;
         margin-left: 30px;
        }
       .circle-plus{
            font-size: 20px;
           display: none;
        }
        .circle-plus:hover{
font-size: 22px;
        }
      
       
        .answer
        {
            width: fit-content;
            
        }
        .optionValue
        {
            margin: 10px;

        }
        .optionName
        {
            margin-left: 30px;
        }
        .optionform
        {
            visibility: ;
        }

    </style>
</head>
<body>
    <div class="addquiz">
         <form action="#" method="GET" class="optionform">
            <input type="text" name="optionNumber" placeholder="Enter Option Number" class="optionform">
        <input type="submit" value="Enter"  name="submitOption" onclick="visoption()" class="optionform">
        </form>
        <form action="#" method="POST">
            <h1>Add Your Quiz Here</h1>
            <input type="text" placeholder="Write Question Here" name="question" id="questioninput">
            <label for="Options" id="optionlabel">options(atmost 6 options)
            <i class="fa-solid fa-circle-plus circle-plus"></i>
            </label>
           <div class="answer">
        <?php 

    if(isset($_GET['submitOption']))
    {
        $n=$_GET['optionNumber'];
        for($i=1; $i<=$n; $i++)
        {
            ?>
            <input type="text" class="optionName" placeholder="Option name" name="<?php echo 'option'.$i; ?>">
            <input type="text" class="optionValue" placeholder="Option Value" name="<?php echo 'value'.$i; ?>">
            <br>
            <?php
        }
    }
        ?>
            </div>
    <input type="submit" value="Add Quiz" class="subbtn" name="submit">
        </form>
        <?php 

        if(isset($_POST['submit']))
        {
            $question=$_POST['question'];
            $n=$_GET['optionNumber'];
            $i=1;
            $option=[];
            $value=[];
       while($i<=$n)
      {
$option[$i]=$_POST['hello'];
      
      }
$option1=$_POST['option1'];
$value1=$_POST['value1'];
$option2=$_POST['option2'];
$value2=$_POST['value2'];
$option3=$_POST['option3'];
$value3=$_POST['value3'];
$option4=$_POST['option4'];
$value4=$_POST['value4'];
$option5=$_POST['option5'];
$value5=$_POST['value5'];
$option6=$_POST['option6'];
$value6=$_POST['value6'];

            echo $option1;
            echo $value1;
            echo $option2;
            echo $value2;
            echo $option3;
            echo $value3;
            echo $option4;
            echo $value4;
            echo $option5;
            echo $value5;
            echo $option6;
            echo $value6;

        }
        ?>                         
    </div>
    <script>
     
     function visoption()
     {
let x=document.getElementsByClassName('optionform');
let y=document.getElementsByClassName('circle-plus');

x.style.visibility="hidden";
y.style.display="flex";


     }
    //     function option2()
    //     {
        
    //   const answerq=document.getElementsByClassName('answer');  
    //    answerq.style.display="flex"; 
    //     const answer=document.querySelector('.answer');
    //     const newOptionName=document.createElement('INPUT');
    //     newOption.className='optionName';
    //     const newOptionValue=document.createElement('INPUT');
    //     newOptionValue.className='optionValue';
    //     answer.appendChild(newOptionName);
    //     answer.appendChild(newOptionValue);


    //     }
    //     function option3
    //     {
    //         let n=3;
        // }
        // function option4
        // {
        //   let n=4;  
        // }
        // function option5
        // {
        //     let n=5;
        // }
        // function option6
        // {
        //     let n=6;
        // }

    </script>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
echo"hello world";
}
?>