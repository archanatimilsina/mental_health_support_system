<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <button id="load-btn"></button>
    <table id="table-data">
     
    <script type="text/javascript" src="jquery.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
$.ajax(
    {
        url:"ajaxdata.php",
        type:"POST",
        success:function(data)
        {
            $("table-data").html(data);
        }
    }
);
    });
    // $(document).ready();: This is a shorthand method in jQuery that ensures the code inside it runs once the HTML document (webpage) is fully loaded and ready. It listens for the ready event of the page.
  </script>
</body>
</html>


