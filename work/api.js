const URL="https://cat-fact.herokuapp.com/facts";
// let promise= fetch(URL);
// console.log(promise);
const btn=document.getElementById("btn");
const facts=document.getElementById("facts");


//async and await
// const getFacts= async ()=>
// {
//     console.log("Getting data.....");
//     let response= await fetch(URL);
//     console.log(response); //JSON FORMAT
//     let data=await response.json(); 
//     facts.innerHTML=data[0].text; 
// }
// btn.addEventListener("click",getFacts);


//promise chaining
// function getFacts(){
// fetch(URL).then((response)=>
// {
// return response.json();
// }).then((data)=>
// {
//     facts.innerHTML=data[3].text;
// });

// }
// btn.addEventListener("click",getFacts);

