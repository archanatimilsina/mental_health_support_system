<?php
require("../connection.php");
if(isset($GET['page']))
{
$page=$GET['page'];
}
else{
    $page=1;
}

$limit=10;
$offset=($page-1)*$limit;
$query1="SELECT * FROM pagination LIMIT $offset,$limit";
$result1=mysqli_query($con,$query1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    while($data=mysqli_fetch_array($result1))
    {
    echo $data['id'].'&nbsp'.'&nbsp'.'&nbsp'; 
    echo $data['name'].'&nbsp'.'&nbsp'.'&nbsp'; 
    echo $data['class'].'&nbsp'.'&nbsp'.'&nbsp';  
    echo $data['address'].'<br>'; 
    }
    ?>
    <?php 
$query="SELECT * FROM pagination" ;
$result=mysqli_query($con,$query);
$total_record=mysqli_num_rows($result);
$total_page=ceil($total_record/$limit);
if($page>1)
{
    echo '<a href="pagination2.php?page='($page-1).'">Previous</a>'.'&nbsp'.'&nbsp'.'&nbsp';
}
for($i=1; $i<$total_page; $i++)
{
    echo '<a href="pagination2.php?page='.$i.'">'.$i.'</a>'.'&nbsp'.'&nbsp'.'&nbsp';
}
if($i>=$page)
{
    echo '<a href="pagination2.php?page='.($page+1).'">Next</a>';
}
?>
</body>
</html>