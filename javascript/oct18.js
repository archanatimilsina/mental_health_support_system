function sum(a,b)
{
    console.log(a+b);
}
function calculator(a,b,sumCallback)
{
sumCallback(a,b);
}
calculator(1,2,sum); //call function without their parenthesis

//
function getData(dataid)
{
setTimeout(
    ()=>{
        console.log("data",dataid);
    },2000);
}
getData(4);


function getData(dataid,getNextdata)
{
setTimeout(
    ()=>{
        console.log("data",dataid);
        if(getNextdata)
        {
            getNextdata();
        }
        // getNextdata();
    },2000);
}

//  getData(4,getData(3));   

//here function hold parenthesis so it will throw error

// try{
//  getData(4,getData(3));   
// }
// catch(error){
// console.log(error);
// }

getData(1,()=>
{
    getData(5);
})

function getData(dataid,getNextdata)
{
setTimeout(
    ()=>{
        console.log("data",dataid);
        if(getNextdata)
        {
            getNextdata();
        }
    },2000);
}

getData(1,()=>
{
    console.log("getting data 2...");
    getData(5,()=>
    {
        console.log("getting data 3.....");

        getData(20);
    });
})

// let promise=new Promise((resolve,reject)=>
// {
    // console.log("I am a Promise");
    // reject("This promise is rejected");
// });


function getData(dataid,getNextdata)
{
    return new Promise((resolve,reject)=>
    {
setTimeout(
    ()=>{
        console.log("data",dataid);
        resolve("This promise is resolved");
        if(getNextdata)
        {
            getNextdata();
        }
    },10000);  
});
}


