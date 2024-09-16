<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <form method="POST" class="myform">
<input type="text" name="name1" value="GOOD FRIEND" class="saya">
<input type="text" name="roll" value="Timilsina" class="saya">
    <a href="qna.php"><input type="submit" name="submit" value="Next" id="myform" onclick="sub()"></a>
    </form>
<script>
    function sub()
    {
             window.location.href="qna.php";
    }


</script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $i=1;
$n='name'.$i;
$dta=$_POST[$n];
echo $dta;


}
?>