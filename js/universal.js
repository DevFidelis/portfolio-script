// general javascript file for all pages.

// variables.
let navbar = document.querySelector('.navbar');
let menu = document.getElementById('menu');

// functions.
const handleMenu = () => {
    console.log(navbar.classList);
    navbar.classList.toggle('show-navbar');
  }

// event listeners.
menu.addEventListener('click', handleMenu);
