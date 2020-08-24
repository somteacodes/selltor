const openModal = document.querySelector('.modal-open');
const modalContainer = document.querySelector('.modal-container');
const modalClose = document.querySelectorAll('.modal-close')

openModal.addEventListener('click', toggleModal);

//add click listner
for (let i = 0; i < modalClose.length; i++) {
    modalClose[i].addEventListener('click', toggleModal);
}



//forms
const registerForm = document.querySelector('.register-form');
const signForm = document.querySelector('.sign-form')
const switchSign = document.querySelector('.switch-sign');
const switchRegister = document.querySelector('.switch-register')

switchSign.addEventListener('click', switchForms);

switchRegister.addEventListener('click', switchForms);

//using keyboard to close modal
document.onkeydown = function (event) {
    event = event || window.event
    let isEscapeKey = false;

    if ("key" in event) {
        isEscapeKey = (event.key === "Escape" || event.key === "Esc")
    }
    else {
        isEscapeKey = (event.keyCode === 27);
    }

    if (isEscapeKey && !modalContainer.classList.contains('hidden')) {
        toggleModal();
    }
}



function switchForms() {
    signForm.classList.toggle('hidden');
    registerForm.classList.toggle('hidden');
}
function toggleModal() {
    modalContainer.classList.toggle('hidden')
}