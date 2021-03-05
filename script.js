const menuIcon=document.querySelector('.hamburger-menu');
const navbar=document.querySelector(".navbar");
const body = document.querySelector("body");

const header_logo=document.querySelector(".header-logo");

menuIcon.addEventListener('click', onClick);


function onClick()
{
    navbar.classList.toggle('change');
    header_logo.classList.toggle('change-cross');
    body.classList.toggle('no-scroll');
}