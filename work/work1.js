const container =document.createElement("div");
const container1=document.querySelector(".container1");
container.className="container";
container.style.width="500px";
container.style.height="500px";
container.style.border="1px solid black";
container.style.borderRadius="10px";
container.style.margin="auto";
container.style.position="absolute";
container.style.top="100px";
container.style.left="auto";
container.style.top="100px";
container.style.zIndex="10";
container.style.backgroundColor="white";
const heading=document.createElement("h1");
const input=document.createElement("input");
input.type="text";
input.placeholder="Enter your name";
input.value="500";
container.firstChild(heading);

container1.appendChild(container);

