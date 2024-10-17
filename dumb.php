<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dump</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <style>
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#comment-section {
    border: 0.3px solid black;
    width: 90%;
    min-height: 605px; /* Minimum height for the section */
    height: auto; /* Allow height to adjust based on content */
    position: sticky; /* Makes the section stick to the viewport */
    display: flex;
    flex-direction: column;
    margin: 250px auto 0; /* Center the section horizontally */
    box-shadow: 0 2px 6px rgb(0, 0, 0);
    border-radius: 15px;
    z-index: 10;
}

#comment-head {
    height: 55px; /* Fixed height for the header */
    width: 100%;
    border: 1px solid black;
    padding: 5px 10px;
    font-size: 30px;
    border-radius: 10px;
    display: flex; /* Use flexbox to center text */
    align-items: center; /* Center content vertically */
}

.comments {
    flex-grow: 1; /* Allow the comments section to grow and fill available space */
    
    display: flex; /* Use flexbox for the comment area */
    flex-direction: column; /* Stack comments vertically */
    overflow-y: auto; /* Allow scrolling if content overflows */
}

#commentpost {
    min-width: auto;
    border-radius: 10px;
    width: 40%; 
    height: 76px; 
    min-height: auto;
    margin: 30px 20px 0;
    display: flex; 
    flex-direction: row;
    align-items: center; 
    padding: 5px; 
}

.commentProfile {
    width: 72px; 
    height: 72px; 
    border: 1px solid black;
    border-radius: 50%; 
    margin-right: 10px; 
    position: relative;
}
.commentProfile img{
width: 100%;
height: 100%;
border: 1px solid black;
position: absolute;
border-radius: 50%;

}
.comment {
    width: calc(100% - 72px - 10px); 
    height: 100%; 
    border: 1px solid black;
    padding: 10px; 
    border-radius: 5px; 
}
#comment-head i{
    cursor: pointer; 
    font-size: 30px; 
    color: black; 
    margin-left: auto;
    position: relative;
}
#commentCreate
{
position: absolute;
top: calc(55px + 10px + 250px  );
 right: 30px;
 border: 2px solid black;
 border-radius: 4px;
 height: 300px;
 width: 500px;
 overflow: auto;
 display: none;
}
#createinput
{
    width: 100%;
    height: 100%;
    
}
#createinput::placeholder{
    font-size: 30px;
}
    </style>
</head>
<body>
<div class="fh commentTab">
                <div id="comment-icon"><i class="fa-solid fa-comment fa-sm" style="color: #000000;"></i></div>
                <div id="comment-count">777</div>
            </div>
<section id="comment-section">
    <h1 id="comment-head">Comments
            <i class="fas fa-plus" id="commentCreateIcon"></i>
       </h1>
  
    <div class="comments">
        <div id="commentpost">
            <div class="commentProfile">
                <img src="uploads/1.jpg" alt="not found">
            </div>
            <div class="comment">
               here is the comment you write ..................................
            </div>
        </div>
    </div>
</section>
<section id="commentCreate">
<input type="text" id="createinput" placeholder="Write Here">
</section>
<script>
          let comment_icon=document.getElementById("commentTab");
            let commentIcon=document.getElementById("commentCreateIcon");
    let commentCreate=document.getElementById("commentCreate");
    let commentSection=document.getElementById("comment-section");

    comment_icon.addEventListener("click",
      function()
        {
           if(commentSection.style.display==="none" || commentSection.style.display==="" ) 
           {
            commentSection.style.display="flex";
            commentCreate.style.display="none";

           }
           else{
            commentSection.style.display="none";
            commentCreate.style.display="none";
           }
        }
       
    );

    commentIcon.addEventListener("click",
      function()
        {
           if(commentCreate.style.display==="none" || commentCreate.style.display==="" ) 
           {
            commentCreate.style.display="none";
            commentCreate.style.display="flex";
           }
           else{
            commentCreate.style.display="none";
           }
        }
       
    );
    

    
</script>
</body>
</html>
