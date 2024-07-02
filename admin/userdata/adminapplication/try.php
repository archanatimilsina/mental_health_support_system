
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Application Accept</title>
    <style>
        #offuserpopup1
{
    width: 300px;
    height: 190px;
border: 1px solid black;
margin:auto;
flex-direction: column;
margin-top: 100px;
z-index: 1;

padding: 10px 10px 20px 10px;
position: fixed;
background-color: white;
left: 450px;
top: 100px;  
display:flex;
}

#offuserpopup1 .reset-btn{
   position: relative;
   right: 0;

}
#offuserpopup1 form p{
    font-size:17px;
    padding: 35px 5px 15px 5px;

}
#offuserpopup1 .sub-btn{
    width: 150px;
    height: 50px;
    background-color: blue;
    color: white;
    border: 1px solid blue;
    border-radius:5px;
    position: relative;
    left: 53px;
}
.buttons{
    display: flex;
    flex-direction: row;
}
    </style>
</head>
<body>
<div id="offuserpopup1">
<h3 class="reset-heading">
<span>Secret Code</span>
<button type="reset" onclick="subpopup1()" class="reset-btn">X</button></h3>
<form action="accept.php" method="POST">
<p>Enter the secret code:</p>
<input type="password" class="scode-input" placeholder="Upto 5 character" name="scode">
    <a href="accept.php?id=<?php echo $data['aaid'];?>"><input type="submit" value="submit" name="submit"></a>
</form>
</div>
<script>
                    function subpopup1()
            {
                let y=document.getElementById('offuserpopup1');
            
                if(y.style.display=="none" )
                {
                    y.style.display="flex";
                   
                    }
                    else{
                        y.style.display="none";
                       
                        }
                        }
    </script>
</body>
</html>