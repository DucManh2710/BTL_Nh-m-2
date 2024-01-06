// Modal
const logins = document.querySelectorAll('.login');
const modal = document.querySelector('.js-modal');
const modalClose = document.querySelector('.js-modal-close');
const modalContainer = document.querySelector('.js-modal-container');

function loginAccount(){
  modal.classList.add('open');


}

// Hàm ẩn đăng nhập
function exitLoginAccount(){
  modal.classList.remove('open')
}
for(const login of logins){
  login.addEventListener('click', loginAccount)
}

modalClose.addEventListener('click', exitLoginAccount)

modal.addEventListener('click',exitLoginAccount )

modalContainer.addEventListener('click', function(event){
  event.stopPropagation();
})


// Tăng sản phẩm 

let counter = 1
const tru = document.querySelector('#tru');
const tang = document.querySelector('#tang');
tru.addEventListener('click', function(){
    counter--;
    document.querySelector('#counter').innerHTML = counter;
    document.querySelector('#cart_quantily').value = counter;
});

tang.addEventListener('click', function(){
    counter++;
    document.querySelector('#counter').innerHTML = counter;
    document.querySelector('#cart_quantily').value = counter;
});

const themgiohang = document.querySelector('#btn_submit_cart');
themgiohang.addEventListener('click',function(){
  document.querySelector('#cart').submit();
});



