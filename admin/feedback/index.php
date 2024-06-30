<?php include('../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <style>
*
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
#tp-btn
        {
            background-color: blue;
            color: white;
            font-size: 16px; 
        font-family: 'Baloo 2', cursive;
        width: 150px;
        height: 40px;
   margin: 50px 50px;
   border-radius: 10px;
        }
.display{
            width: 150px;
            height: 150px;
            /* border: 1px solid black; */
            margin: 10px auto;
        }
.display img{
       width: 150px;
       height: 150px; 
 }
table{
width: 80%;
margin: auto;
}
table th{
font-size: 25px;
}
table tr{
  height: 150px;
padding: 10px;

}
table tr td{
text-align: center;
font-size: 19px;
}
        
table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
          
        }
        .actn-btn
        {
            color: black;
            font-size: 18px; 
        font-family: 'Baloo 2', cursive;
        width: 70px;
        height: 40px;
        border-radius: 10px;   
        }
        .edit-btn{
            background-color: green;
        }
        .del-btn{
            background-color: red; 
        }
        .show-btn{
            background-color: yellow;
            
        }
        .post-btn{
            background-color: blue;
            
        }

    </style>
</head>
<body>
    <section class="main">
<div class="container">
    <a href="create.php"><button id="tp-btn">Add Image</button></a>
  
    <table>
        <thead>
            <tr>
                <th scope="col" width="10%">S.N</th>
                <th scope="col" width="60%">Image</th>
                <th scope="col" width="30%">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
<?php 
$query="SELECT * FROM feedback_img";
$result=mysqli_query($con,$query);
$i=1;
while($data=mysqli_fetch_array($result))
{
    ?>
<td scope="row"><?php echo $i++; ?></td>
<td scope="row">
<div class="display">
    <img src="<?php echo $data['feedback_img']?>" alt="#" width="100%" height="100%">
  </div>
</td>
<td scope="row">
<a href="edit.php?id=<?php echo $data['fid'];?>"><button class="actn-btn edit-btn">Edit</button></a>
<a href="show.php?id=<?php echo $data['fid'];?>"><button class="actn-btn show-btn">Show</button></a>
<a href="delete.php?id=<?php echo $data['fid'];?>"><button class="actn-btn del-btn">Delete</button></a>
</td>
</tr>
    <?php
}

?>

        </tbody>
    </table>
</div>
    </section>
</body>
</html>