import { validateEmail }  from './registerValidation.js'

const USERNAME_INPUT = document.getElementById('usernameInput')
const EMAIL_INPUT = document.getElementById('emailInput');
const PASSWORD_INPUT = document.getElementById('passwordInput');
const RE_PASSWORD_INPUT = document.getElementById('re-passwordInput');
const REGISTER_SUBMIT_BUTTON = document.getElementById('registerSubmitButton');


let ajaxRequest = ()=>{
    
}
REGISTER_SUBMIT_BUTTON.addEventListener('click', ajaxRequest, false);