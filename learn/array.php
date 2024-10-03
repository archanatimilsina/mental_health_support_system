<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array try</title>
</head>

    <form action="" method="POST">
        <?php

    for($i=0; $i<=4; $i++)
    {
    ?>
        <input type="text" name="question<?php echo $n ;?>" placeholder="Enter the question">
        <input type="text" name="answer<?php echo $n ;?>" placeholder="Enter the answer">
        <input type="submit" name="submit" value="Post">
    </form>
<?php  }
?>
    <?php
if(isset($_POST['Submit']))
{
    for($i=0; $i<=4; $i++)
    {
        $questionform='question'.$i;
$question[]=$_POST[$questionform];
    }
}
    ?>
</body>
</html>