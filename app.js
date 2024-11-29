let iconCart = document.querySelector('.fa-basket-shopping');
let closeCart =document.querySelector('.close');
let body = document.querySelector('body');

iconCart.addEventListener('click', () => {
    body.classList.toggle('showcart')
})
closeCart.addEventListener('click', () => {
    body.classList.toggle('showcart')
})
