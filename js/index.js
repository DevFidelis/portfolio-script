// variables
let gestureBack = document.querySelector('#gesture-back');
const images = ['img/bk1.jpg', 'img/bk2.png', 'img/bk3.jpg', 'img/bk4.jpg'];
let i = 0;
let speed = 5000;

// functions
const changeBackImg = () => {
  gestureBack.src = images[i];
  
  if (i >= images.length - 1) {
    i = 0;
  } else {
    i++;
  }
  
  setTimeout(changeBackImg, speed);
};

// event listeners
window.addEventListener('load', changeBackImg);
