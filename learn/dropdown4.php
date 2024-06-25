<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>

    <style>
          .paste-button1{
          position: relative;
          width: 200px;
          margin: auto;
      
          display: inline-block;

        }
        .paste-button2{
          position: relative;
          width: 200px;
          margin: auto;
          border: 1px solid black;
          display: inline-block;

        }
        .dropdown-content1
        {
            display: none;
            position: absolute;
            left: 20px;
     
            z-index: 1;
        }
        .dropdown-content2
        {
            display: none;
            position: absolute;
            left: 190px;
           border: 1px solid black;
            z-index: 5;
        }
        .paste-button1:hover .dropdown-content1
        {
display: block;
        }
        .paste-button2:hover .dropdown-content2
        {
display: block;
        }
        .dropdown-content1 a{
            display: block;
            text-decoration: none;
            color: black;
            background-color: sandybrown;
        }
        .dropdown-2 a{
            display: block;
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
<div class="paste-button1">
        <button class="button"><i class="fa-solid fa-bars fa-lg"></i></button>
        <div class="dropdown-content1">
        <div class="paste-button2">
            <a href="index.php">Helllo</a>
            <div class="dropdown-content2">
            <a href="index.php">Helllo</a>
            <a href="index.php">Helllo1</a>
            <a href="index.php">Helllo2</a>
            </div>
            </div>
            <div class="paste-button2">
            <a href="index.php">Helllo</a>
            <div class="dropdown-content2">
            <a href="index.php">Helllo</a>
            <a href="index.php">Helllo1</a>
            <a href="index.php">Helllo2</a>
            </div>
            </div>
            <div class="paste-button2">
            <a href="index.php">Helllo</a>
            <div class="dropdown-content2">
            <a href="index.php">Helllo</a>
            <a href="index.php">Helllo1</a>
            <a href="index.php">Helllo2</a>
            </div>
            </div>

        </div>
    </div>
</body>
</html>