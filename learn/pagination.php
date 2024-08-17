<?php
require("../connection.php");

if(isset($_GET['page']))
{
    $page=$_GET['page'];
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
    <title>Pagination</title>
</head>
<body>
<table>
    <tr>
        <th>Roll no</th>
        <th>Name</th>
        <th>Class</th>
        <th>Address</th>
    </tr>
    <?php
    while($data=mysqli_fetch_assoc($result1))
    { 
  
    ?>
    <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['class']; ?></td>
        <td><?php echo $data['address']; ?></td>
    </tr>    
<?php
}
?>

</table>
<?php
$pr_query="SELECT * FROM pagination";
$pr_result=mysqli_query($con,$pr_query);
$total_record=mysqli_num_rows($pr_result);
$total_page=ceil($total_record/$limit);

if($page>1)
{  
    echo '<a href="pagination.php?page='.($page-1).'">Previous</a>'.'&nbsp'.'&nbsp';  
} 
for($i=1;$i<$total_page;$i++)
{
   
   echo '<a href="pagination.php?page='.$i.'">'.$i.'</a>'.'&nbsp'.'&nbsp';

    
}
if($i>$page)
    {   
        echo '<a href="pagination.php?page='.($page+1).'">Next</a>';
    }
?>

</body>
</html>

