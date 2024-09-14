<!-- caling forms items and accessing them using javascript -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1</title>
</head>
<body>
    <form action="lesson1.php" id="formi" method="POST">
<input type="text" id="name">
<input type="text" id="roll">
<input type="submit" id="submit">
    </form>


<script>
    let sub=document.forms['formi']['submit'];
    // sub.style.visibility="hidden";
</script>
</body>
</html>