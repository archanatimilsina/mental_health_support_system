const BASE_URL="https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_Yh8iDhyhQR3JnzwpnNNGFBxJCrTHaV29iF1Gi1E6";
const dropdowns =document.querySelectorAll(".dropdown select");
const btn=document.querySelector("form button");
const fromCurr=document.querySelector(".from select");
const toCurr=document.querySelector(".to select");
const msg=document.querySelector("msg");

document.addEventListener("load",
    ()=>
    {
        updateExchangeRate();
    }
);
for (let select of dropdowns)
    {
    for(currCode in countryList)
    {
        let newOption=document.createElement("option");
        newOption.innerText=currCode;
        newOption.value=currCode;
        
        if(select.name==="from" && currCode ==="USD")
        {
            newOption.selected="selected";
        }
        else if(select.name==="to" && currCode==="NPR")
        {
newOption.selected="selected";
        }
select.append(newOption);

    }
    select.addEventListener("change",(evt)=>
    {
updateFlag(evt.target);
    });
    }
    const updateFlag=(element)=>
    {
       //extract currency code
       let currCode=element.value;
       let countryCode=countryList[currCode];
       let newSRC=`https://flagsapi.com/${countryCode}/flat/64.png`;
       let img = element.parentElement.querySelector("img");
       img.src=newSRC;

    }

   
btn.addEventListener("click", (evt)=>
{
evt.preventDefault();
updateExchangeRate();
});
const updateExchangeRate= async()=>
{
    let amount=document.querySelector(".amount input");
let amtValue=amount.value;
if(amtValue ==="" || amtValue < 1)
{
    amtValue=1;
    amount.value="1";
}
const URL=`${BASE_URL}/${fromCurr.value.toLowerCase()}/${toCurr.value.toUpperCase()}.json`;
let response=await fetch(BASE_URL);
let responseObject=await response.json();
console.log(responseObject);
let data=responseObject.data;
let fromCurrVal=fromCurr.value;
console.log(fromCurrVal);
 let toCurrVal=toCurr.value;
 console.log(toCurrVal);
  let rate1=data[fromCurrVal];
  let rate2=data[toCurrVal];
  if(rate1===undefined || rate2=== undefined)
  {
    console.log("This conversion is not possible");
  }
let finalAmount=amtValue*rate;
msg.innerText=  `${amtValue} ${fromCurrVal}=${finalAmount} ${toCurrVal}`;
}

document.addEventListener("load",
    ()=>
    {
        updateExchangeRate();
    });