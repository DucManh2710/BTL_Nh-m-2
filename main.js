const next = document.querySelector('.next')
const prev = document.querySelector('.prev')
const comment = document.querySelector('#list-comment')
const commentItem = document.querySelectorAll('#list-comment .item')
var translateY = 0
var count = commentItem.length

next.addEventListener('click', function (event) {
  event.preventDefault()
  if (count == 1) {
   
    return false
  }
  translateY += -400
  comment.style.transform = `translateY(${translateY}px)`
  count--
})

prev.addEventListener('click', function (event) {
  event.preventDefault()
  if (count == 3) {
    
    return false
  }
  translateY += 400
  comment.style.transform = `translateY(${translateY}px)`
  count++
})


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

// // Modal đăng ký

const dangky = document.querySelectorAll('.dangky');
const modal1 = document.querySelector('.js-modal1');
const modalClose1 = document.querySelector('.js-modal-close1');
const modalContainer1 = document.querySelector('.js-modal-container1');

function dangkyaccount(){
  modal1.classList.add('open');


}

// Hàm ẩn đăng ký
function thoatdangky(){
  modal1.classList.remove('open')
}
for(const i of dangky){
  i.addEventListener('click', dangkyaccount)
}

modalClose1.addEventListener('click', thoatdangky)

modal1.addEventListener('click',thoatdangky )

modalContainer1.addEventListener('click', function(event){
  event.stopPropagation();
})

