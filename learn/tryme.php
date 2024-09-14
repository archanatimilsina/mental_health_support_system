<?php
require('../connection.php');
if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else{
    $page=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </body>
    <?php
 echo '<a href="tryme.php?page='.($page+1).'">Next</a>';
 if($page=1)
 {
    echo '<script type="text/javascript">name();</script>';
 }
 if($page=2)
 {
    echo "<script>roll();</script>";
 }
 if($page=3)
 {
    echo "<script>height();</script>";
 }
 if($page=4)
 {
    echo "<script>weight();</script>";
 }
 if($page=5)

 {
    echo "<script>submit();</script>";
 }
?>

<form action="tryme.php" method="post" id="my-form">
<label for="name" class="name">Name</label>
<input type="text" name="name" class="name"> 
<label for="roll" class="roll">Roll</label>
<input type="text" name="roll" class="roll"> 
<label for="height" class="height">Height</label>
<input type="text" name="Height" class="height">
<label for="weight" class="weight">weight</label>
<input type="text" name="weight" class="weight"> 
<input type="submit" name="submit" id="submit">
</form>
<script>
    let name=document.body.getElementsByClassName('name');
    let roll=document.getElementsByClassName('roll');
    let height=document.getElementsByClassName('height');
    let weight=document.getElementsByClassName('weight');
    let submit=document.forms['my-form']['submit'];
    function name()
    {
        submit.style.visibility ='hidden';
    }
    
</script>
</body>
</html>