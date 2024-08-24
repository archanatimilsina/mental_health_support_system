
<style>
 
body{
  background-color: lavender;
}
#aboutContent
{
  display: flex;
  flex-direction: column;
  flex-wrap:wrap;
}
.a
{
width: 100%;

}
.slider{
    width: 100%;
  height: 700px;
  margin-top: 10px;
}
.branchTitle
{
    font-size: 2.6rem;
    color: rgb(94, 69, 69);
   margin-bottom: 10px;
   margin-left: 30px;
   font-family: 'Baloo 2', cursive;
}

.branches
{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
 height:400px; 
 justify-content: center;

    }
.b{
  width:30%;
  
  height: 100%;
  margin: 10px;
  display: flex;
  flex-direction: column;
  
  background-color: white;
}
.b:hover{
 border: 1px solid black;
 background-color:  whitesmoke;
 border-radius: 10px;
}
.img1
{ 
height: 37%;
width: 60%;
top: 10px;
margin: auto;

}
.img1 img{
  border-radius: 3%;
}
.location1{
width: 100%;
height: 7%;
font-family: 'Baloo 2', cursive;
background-color: #291d1a;
color: #0a0909;
}
.bname{
    text-align: center;
  width: 60%;
height: 9%;
border: 0.5px solid black;
box-shadow: 4px 4px 7px gray;
color: #0a0a0a;
margin: auto;
font-family: 'Baloo 2', cursive;
border-radius: 10px;
background-color: rgb(252, 228, 236)
}

.detail1{
width: 80%;
height: 32%;
margin: auto;
font-size:19px;
font-family: 'Baloo 2', cursive;
text-align: center;
color: #0a0a0a; 
border: 1px solid rgb(5, 5, 5);
border-radius: 10px;
border-collapse: collapse;
}
.about{
height: 700px;
display: flex;
flex-direction: column; 
}
.article
{
font-size: 2.6rem;
    color: rgb(94, 69, 69);
    margin-top: 50px;

margin-left: 30px;

}
.c{
width: 100%;
height: 45%;
margin-top: 10px;
display: flex;
flex-direction: row;
flex:wrap;

}

.d{

width: 30%;
margin: 20px;
display: flex;
flex-direction: column;
background-color: white;
}
.d:hover
{
  border: 1px solid black;
  border-radius: 10px;
  background-color:  whitesmoke;
}
.d a button{
margin-left:25%;
width: 150px;
height: 40px;
margin-bottom: 8px;
background-color: rgb(252, 228, 236);
}
.e{
width:60%;
margin: auto;
height: 60%;
border-radius: 20px;

}
.writer{
width: 100%;

height: 13%;
font-size:20px;
font-family: 'Baloo 2', cursive;
text-align: center;

}
.f
{
font-size:19px;
font-family: 'Baloo 2', cursive;
text-align: center;

}
.bname{
    font-size: 1.5rem;
}


</style>

 <section id=aboutContent>
 
  <div class="a slider">
    <img src="img/about2.avif" width="100%"; height="100%" alt="#">
  </div>
  

  <p class="branchTitle">Our Branches</p>
  
  
  <div class="a branches">
    <div class="b box1">
<div class="img1">
  <img src="img/about11.avif" width="100%" height="100%" alt="">
</div>
<p class="f bname">Hotel Pearl</p>
<p class="f location">Location: Suryabinayak, Bhaktapur</p>
<p class="detail1">Hotel building that provides lodging, meals, and other services to the traveling public on a commercial basis. </p>
    </div>
    <div class="b box2">
    <div class="img1">
    <img src="img/about12.avif" width="100%" height="100%" alt="">
    </div> 
    <p class="f bname">Luffy Hall</p>
    <p class="f location">Location: Damuli,Tanahu</p>
<p class="detail1">A hall is a special purpose room, or a building, used for hosting large social and business events. </p>
    </div>
    <div class="b box3">
    <div class="img1">
    <img src="img/paris.jpg" width="100%" height="100%" alt="">
    </div>
    <p class="f bname">Cafe Joy</p>
    <p class="f location">Location: NewRoad,Pokhara</p>
<p class="detail1">A cafe is a small restaurant focusing on caffeinated drinks such as classic drip coffee, cappuccinos, espresso, and tea. </p></p>
    </div>
  </div>
  

  
  <p class="article">Our Thoughts</p>
  <div class="a about">
    <div class="c abox1">
<div class="d box31">
<div class="e">
<img src="img/user1.avif" width="100%" height="100%" alt="">

</div>
<p class="writer">Director Naruto Uzumaki</p>
<a href="articles/naruto.md"><button>Read Now</button></a>
</div>
<div class="d box32">
<div class="e">
<img src="img/user2.avif" width="100%" height="100%" alt="">

</div>
<p class="writer"> C.E.O Hatake Kakashi</p>
<a href=""><button>Read Now</button></a>
</div>
<div class="d box33">
<div class="e">
<img src="img/user3.avif" width="100%" height="100%" alt="">

</div>
<p class="writer">Roronoa Zoro</p>
<a href=""><button>Read Now</button></a>
</div>
    </div>
    <div class="c abox2">
<div class="d box41">
<div class="e">
<img src="img/user4.avif" width="100%" height="100%" alt="">

</div>
<p class="writer">Monkey D Luffy</p>
<a href=""><button>Read Now</button></a>
</div>
<div class="d box42">
<div class="e">
<img src="img/user5.avif" width="100%" height="100%" alt="">

</div>
<p class="writer">Nico Robin</p>
<a href=""><button>Read Now</button></a>
</div>
<div class="d box43">
<div class="e">
<img src="img/user6.avif" width="100%" height="100%" alt="">

</div>
<p class="writer">Chopper</p>
<a href=""><button>Read Now</button></a>
</div>
    </div>
  </div>
  
</section>
    
  