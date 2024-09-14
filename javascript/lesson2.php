<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 2</title>
</head>
<body>
<form action="lesson2.php" id="formi" method="POST">
<input type="text" id="name" value="20">
<input type="text" id="roll" value="30">
<input type="submit" id="submit" onclick="add()">
    </form>
    <script>
        const x=document.forms['formi']['name'].getAttribute('value');
        const y=document.forms['formi']['roll'].getAttribute('value');

        function add()
        {
            const z= Number(x)+Number(y);
       alert(z);
        }
        
    </script>
</body>
</html>