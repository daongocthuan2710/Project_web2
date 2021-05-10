const sign_in_btn = document.querySelector("#sign-in-button");
const sign_up_btn = document.querySelector("#sign-up-button");
const container = document.querySelector('.container');
const sign_in_form = document.getElementById("sign-in-form");
const sign_up_form = document.getElementById("sign-up-form");

// console.log(container);

sign_up_btn.addEventListener('click', ()=> {
    container.classList.add('sign-up-mode');

    container.classList.remove('sign-in-mode');
    // container.classList.add('sign-in-mode');
});

sign_in_btn.addEventListener('click', ()=> {


    container.classList.add('sign-in-mode');
    
    container.classList.remove('sign-up-mode');
 
    
});
