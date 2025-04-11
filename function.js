var sign_up_link = document.querySelector("#sign-up-link");
var sign_in_link = document.querySelector("#sign-in-link");
var container = document.querySelector(".container");

sign_up_link.addEventListener("click", () =>{
    container.classList.add('sign_up_mode');
})

sign_in_link.addEventListener("click", () =>{
    container.classList.remove('sign_up_mode');
})  