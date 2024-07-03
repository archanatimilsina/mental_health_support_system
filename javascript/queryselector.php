<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuerySelector</title>
</head>
<body> 
     
       <div class="hello2">
        </div>
    <div class="hello">

    </div>

    <div class="hello">
        
        </div>
        
    
        <div class="hello3">
        
        </div>
<script>
    // query selector
     let x=document.querySelector("div");
     x.style.border="1px solid black";
     x.style.width="100%";
     x.style.height="200px";
     x.style.backgroundColor="green";

// queryselectorAll
    const y=document.querySelectorAll(".hello");
    for(let i=0; i<y.length; i++)
    {
    y[i].style.border="1px solid black";
    y[i].style.width="100%";
    y[i].style.height="200px";
    y[i].style.backgroundColor="red"; 
    y[i].style.margin="5px"; 
    }
</script>
<div id="hello">

    </div>

    <div id="hello">
        
        </div>
        <script>
             const z=document.querySelectorAll("#hello");
    for(let i=0; i<z.length; i++)
    {
    z[i].style.border="1px solid black";
    z[i].style.width="100%";
    z[i].style.height="200px";
    z[i].style.backgroundColor="pink"; 
    z[i].style.margin="5px"; 
    }
        </script>
</body>
</html>