// Gallery

let product_img = document.querySelector('.product-img img');
let product_thumbnail = document.querySelectorAll('.product-thumbnail');

product_thumbnail.forEach((product) => {
  product.addEventListener('click', () => {
    product_thumbnail.forEach((product) => {
      product.classList.remove('active');
    });
    product.classList.add('active');
    
    let img = product.querySelector('img').getAttribute('src');
    let index = product.querySelector('img').getAttribute('data-index');
    
    product_img.setAttribute('src', img);
    product_img.setAttribute('data-index', index);
    
    product_img.classList.add('product-down-animation');
    setTimeout(() => {
      product_img.classList.remove('product-down-animation');
    }, 500);
  });
});



// Counter Button
let plus = document.querySelector(".plus")
let minus = document.querySelector(".minus")
let num = document.querySelector(".num")

let a = 1;

plus.addEventListener("click", ()=>{
  if (a < 10) {
    
    a++;
    a = (a < 10) ? "0" + a : a;
    num.innerText = a;
  }
  
});

minus.addEventListener("click", ()=>{
  if(a > 1){
    a--;
    a = (a < 10) ? "0" + a : a;
    num.innerText = a;
  }
});