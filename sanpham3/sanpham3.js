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