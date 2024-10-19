 function api()
 {
    return new Promise((resolve,reject)=>
    {
        setTimeout(()=> 
                {
console.log("Weather data");
        resolve(200);
                },3000);
        
    });
 }
async function getWeatherData(){
    await api();

}
getWeatherData();