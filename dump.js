function asyncFunc()
{
    return new Promise(
        (resolve,reject)=>{
            setTimeout(()=>
                {
                   console.log("data1");
            resolve("success")    ;
                },4000)
         
        }
    );
}
console.log("fetching data1.......");
let p1=asyncFunc();
p1.then(
    (res)=>
    {
console.log(res);
    }
);

// if we need to fetch another data also they both will execute at the same time
console.log("fetching data2......");
let p2=asyncFunc();
p2.then(
    (res)=>
    {
console.log(res);
    }
);

//hence we can use promise chaining
// then(then)



