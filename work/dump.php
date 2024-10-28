
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$data=file_get_contents("php://input");
echo $data;
$user=json_decode($data,true); //associative array

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
     echo $user["name"];
    ?>
</body>
</html>