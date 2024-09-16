<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hello</title>
</head>
<body>
    
    <?php
   for($m=1; $m<3; $m++)
   {
    $i=$m*3;
   }
   while($i<2)
   {
    $j=array($i*5);
    $i++;
   }

    ?>
    <script>
      while(var k<2)
        {
            array[k]=<?php echo $j;?>
            console.log(array);
            var k++;
        }
    </script>
</body>
</html>