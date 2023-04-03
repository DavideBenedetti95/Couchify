// Swiper
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  speed: 2500,
  
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  
  centeredSlides: true,
  
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
});




// Countdown

// Countdown fine corso
let countDownDate = new Date("May 4, 2023 13:00:00").getTime();

let x = setInterval(function() {
  
  
  let now = new Date().getTime();
  
  
  let distance = countDownDate - now;
  
  
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  
  document.querySelector('#days').innerHTML = days;
  document.querySelector('#hours').innerHTML = hours;
  document.querySelector('#minutes').innerHTML = minutes;
  document.querySelector('#seconds').innerHTML = seconds;
  let expired = document.querySelector('#expired');
  
  
  
  if (distance < 0) {
    clearInterval(x);
    document.querySelector('#days').innerHTML = '';
    document.querySelector('#hours').innerHTML = '';
    document.querySelector('#minutes').innerHTML = '';
    document.querySelector('#seconds').innerHTML = '';
    expired.classList.add('animate__animated')
    expired.classList.add('animate__bounceIn')
    expired.innerHTML = 'EXPIRED';
    
    
  }
}, 1000);











