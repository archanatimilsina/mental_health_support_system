const user = {
    name: "Archana",
    roll: 89,
    age: 23,
    weight: 56
};

console.log("Sending Data:", JSON.stringify(user));  

fetch('dump.php',  
{
    method: "POST",
    headers: {
        "Content-Type": "application/json; charset=utf-8"
    },
    body: JSON.stringify(user)
})

