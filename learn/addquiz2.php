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
            height:350px;
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
        .dropdown-content
        {
            display: none;
            position: absolute;
            left: 10px;
           
            width: 100px;
            height: 150px;
            z-index: 1;
            border-radius:3px;
        }
        .addoptions:hover .dropdown-content
        {
display: block;
        }
        .dropdown-content a{
            display: block;
            text-decoration: none;
            width: 100%;
            height: 20%;
            color: black;
            background-color: sandybrown;
            border: 0.1px solid black;
            border-radius: inherit;
            text-align: center;
            font-size: 21px;
            font-family: cursive;
        }
        .dropdown-content a:hover{
            background-color: white;
          
        }
    </style>
</head>
<body>
    <div class="addquiz">
        <form action="#" method="post">
            <h1>Add Your Quiz Here</h1>
            <input type="text" placeholder="Write Question Here" name="Question" id="questioninput">
            <label for="Options" id="optionlabel">options(atmost 6 options)</label>
            <div class="addoptions">
           <i class="fa-solid fa-circle-plus circle-plus" class="button"></i>
          <div class="dropdown-content">
            <option onclick="option2()">2 option</option>
            <option onclick="option3()">3 option</option>
            <option onclick="option4()">4 option</option>
            <option onclick="option5()">5 option</option>
            <option onclick="option6()">6 option</option>
       
        </div>
    </div>
            
    <input type="submit" value="Add Quiz" class="subbtn" name="submit">
        </form>
    </div>
    <script>
     
        function option2
        {
        let n=2;
        }
        function option3
        {
            let n=3;
        }
        function option4
        {
          let n=4;  
        }
        function option5
        {
            let n=5;
        }
        function option6
        {
            let n=6;
        }

    </script>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
echo"hello world";
}
?>