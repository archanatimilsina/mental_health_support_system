const user= new Object();
user={
    name:"Archana",
    surname:"Timilsina",
    age:34
}

function userprint(user)
{
   return 
   { 
    name:this.name;
    surname:this.surname;
   }
}
userprint(user);