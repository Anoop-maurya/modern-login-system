let sin = document.querySelector(".sign-in");
let sinup = document.querySelector(".sign-up");

let maindiv =document.querySelector(".maindiv")

sin.addEventListener("click",function(){
    maindiv.classList.toggle("add");
    console.log(maindiv.classList)
});

sinup.addEventListener("click",function(){
    maindiv.classList.toggle("add"); 
});

