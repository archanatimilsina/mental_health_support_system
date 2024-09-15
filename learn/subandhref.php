<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="subandhref.php" method="POST">
<input type="text" name="name1">
<input type="text" name="roll">
    <a href="qna.php"><input type="submit" name="submit" value="Next"></a>
    </form>
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