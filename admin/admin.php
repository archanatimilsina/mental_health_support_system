<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <style>
        .containeer
        {
            width: 100%;
            height: 500px;
            border: 1px solid black;
            position: relative;
        }
        .containeer img{
    width: 100%;
    height: 500px;

        }
        .menu-icon
{
position: relative;
margin-left: 10px;
  top: 10px;
  z-index: 1000;
}
    </style>
</head>
<body>
    <div class="containeer">
<img src="../assets/images/hello.jpg" alt="#">
<div class="menu-icon">
  <a><i class="fa-solid fa-bars fa-lg" onclick="menu()"></i></a>
</div>
    </div>
</body>
</html>