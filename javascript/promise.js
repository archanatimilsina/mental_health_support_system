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



function getData(dataid,getNextdata)
{
    return new Promise((resolve,reject)=>
    {
setTimeout(
    ()=>{
        // console.log("data",dataid);
        // resolve("This promise is resolved");
        reject("there is error occurred");
        if(getNextdata)
        {
            getNextdata();
        }
    },10000);  
});
}




const getPromise=()=>
    {
        return new Promise((resolve,reject)=>
        {
    console.log("I am a Promise");
    resolve("success");
        });
    };
    
    let promise=getPromise();
    promise.then(
        (res)=>{
            console.log("Promise fulfilled");
        }
    );



// const getPromise1=()=>
//     {
//         return new Promise((resolve,reject)=>
//         {
    // console.log("I am a Promise");
    // reject("error");
    //     });
    // };
    
    // let promise1=getPromise();
    // promise.catch(
    //     (err)=>{
    //         console.log("rejected",err);
    //         //it will give the reject ("")====> rejected error
    //     }
    // );

    // const getPromise3=()=>
    //     {
    //         return new Promise((resolve,reject)=>
    //         {
    //     console.log("I am a Promise");
    //     resolve("success");
    //         });
    //     };
        
    //     let promise3=getPromise();
    //     promise.then(
    //         (res)=>{
    //             console.log("Promise fulfilled",res);
    //         }
    //     );

//         function asyncFunc()
// {
//     return new Promise(
//         (resolve,reject)=>{
//             setTimeout(()=>
//                 {
//                    console.log("data1");
//             resolve("success")    ;
//                 },4000)
         
//         }
//     );
// }
// console.log("fetching data1.......");
// let p1=asyncFunc();
// p1.then(
//     (res)=>
//     {
// console.log(res);
//     }
// );

// // if we need to fetch another data also they both will execute at the same time
// console.log("fetching data2......");
// let p2=asyncFunc();
// p2.then(
//     (res)=>
//     {
// console.log(res);
//     }
// );

//hence we can use promise chaining
// then(then)

// function asyncFunc()
// {
//     return new Promise(
//         (resolve,reject)=>{
//             setTimeout(()=>
//                 {
//                    console.log("data1");
//             resolve("success")    ;
//                 },4000)
         
//         }
//     );
// }
// console.log("fetching data1.......");
// let p1=asyncFunc();
// p1.then(
//     (res)=>
//     {
// console.log(res);
//     }
// );

// // if we need to fetch another data also they both will execute at the same time
// console.log("fetching data2......");
// let p2=asyncFunc();
// p2.then(
//     (res)=>
//     {
// console.log(res);
//     }
// );



//hence we can use promise chaining
// then(then)
// function asyncFunc1()
// {
//     return new Promise(
//         (resolve,reject)=>{
//             setTimeout(()=>
//                 {
//                    console.log("data1");
//             resolve("success1")    ;
//                 },4000)
         
//         }
//     );
// }
// function asyncFunc2()
// {
//     return new Promise(
//         (resolve,reject)=>{
//             setTimeout(()=>
//                 {
//                    console.log("data2");
//             resolve("success2")    ;
//                 },4000)
         
//         }
//     );
// }
// console.log("fetching data1.......");
// let p1=asyncFunc1();
// p1.then(
//     (res)=>
//     {
// console.log(res);
// console.log("fetching data2......");
// let p2=asyncFunc2();
// p2.then(
//     (res)=>
//     {
// console.log(res);
//     }
// );
//     }
// );



//hence we can use promise chaining
// then(then)
// function asyncFunc1()
// {
//     return new Promise(
//         (resolve,reject)=>{
//             setTimeout(()=>
//                 {
//                    console.log("data1");
//             resolve("success1")    ;
//                 },4000)
         
//         }
//     );
// }
// function asyncFunc2()
// {
//     return new Promise(
//         (resolve,reject)=>{
//             setTimeout(()=>
//                 {
//                    console.log("data2");
//             resolve("success2")    ;
//                 },4000)
         
//         }
//     );
// }
// console.log("fetching data1.......");
// asyncFunc1().then((res)=>
//     {
// console.log(res);
// console.log("fetching data2......");
// asyncFunc2().then(
//     (res)=>
//     {
// console.log(res);
//     }
// );
//     }
// );



// function getData(dataId)
// {
//     return new Promise((resolve,reject)=>
//     {
//         setTimeout(()=>
//         {
//           console.log("data",dataId);
//         resolve("success");   
//         }
//             ,3000);
//     });
// }

// getData(5).then(()=>
// {
//     return getData(2);
// }).then(
//     ()=>
//     {
//        return getData(5);


//     }
// ).then((res)=>
//     {
// console.log(res);
//     }
// )