<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like Button</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <style>
     *
     {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
     }
     
     .star
{
    margin-top: 70px;
   width: 10%;
    height: 100%;
    display: flex;
    flex-direction: row;
}
.star-icon
{
    width: 50%;
    height: 100%;
    background-color: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
}
.star-icon i{
    font-size: 40px;
    border: 1px solid black;
    height: 50px;
    padding-top: 20px;
    
}
#star-count
{
    width: fit-content;
    height: 100%;
background-color: inherit;
font-size: 19px;
font-weight: 200;
font-family: cursive;
display: flex;
    align-items: center;
    justify-content: center;
}
    </style>
</head>
<body>
<div class="fh star">
                <div class="star-icon">
                    <i class="fa-solid fa-star <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like Button</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <style>
     *
     {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
     }
     
     .star {
        margin-top: 70px;
        width: 10%;
        height: 100%;
        display: flex;
        flex-direction: row;
    }
    .star-icon {
        width: 50%;
        height: 100%;
        background-color: inherit;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .star-icon i {
        font-size: 40px;
        border: 1px solid black;
        height: 50px;
        padding-top: 20px;
        cursor: pointer;
    }
    #star-count {
        width: fit-content;
        height: 100%;
        background-color: inherit;
        font-size: 19px;
        font-weight: 200;
        font-family: cursive;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    </style>
</head>
<body>
<div class="fh star">
    <div class="star-icon">
        <i class="fa-solid fa-star fa-sm" style="color: black" id="star"></i>
    </div>
    <div id="star-count">1000</div>
</div>

<script>
   
    let isLiked = false; 
    let likeCount = 0; 
    let starBox = document.getElementById("star");
    let starCountBox = document.getElementById("star-count");

    function updateStarCount() {
        starCountBox.textContent = `${likeCount}`; 
    }

   
    starBox.addEventListener("click", function() {
        if (!isLiked) {
            isLiked = true;
            likeCount++;
            starBox.style.color = "red"; 
        } else {
          
            isLiked = false;
            likeCount--;
            starBox.style.color = "black"; 
        }
        updateStarCount();
    });

    updateStarCount();
</script>

</body>
</html>
fa-sm" style="color: red" id="star"></i>
                </div>
                <div id="star-count">1000</div>
            </div>
            <script>
                var star=undefined;
                var click=undefined;
                let starBox=document.getElementById("star");
                let starCountBox=document.getElementById("star-count");
                starBox.addEventListener("click", click()
            {
like=true;
if(like=true)
{
   starCount++;
starBox.removeEventListener("click",click());
}




            });
                

            </script>
</body>
</html>