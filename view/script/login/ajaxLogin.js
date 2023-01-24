import { isValidEmail }from './validation.js';

const LOGIN_SUBMIT_BUTTON = document.getElementById('loginSubmitButton');
const EMAIL_INPUT = document.getElementById('emailInput');
const PASSWORD_INPUT = document.getElementById('passwordInput');
let errors = document.getElementById('errors');
let errorLog = document.getElementById('errorLog');

//Check validation
let validateEmail = (param)=>{
    let emailErrors = isValidEmail(param);

    if(emailErrors.containAtSymbol == false)
    {
        EMAIL_INPUT.style.border='2px solid red'
        EMAIL_INPUT.style.backgroundColor = '#f4c2c2'
    }
    else{
        EMAIL_INPUT.style.border='2px solid #cccccc';
        EMAIL_INPUT.style.backgroundColor = '#ffffff'
    }
     
    EMAIL_INPUT.addEventListener('keyup', ajaxRequest);

    console.log(emailErrors.containAtSymbol)
}

let ajaxRequest = (e)=>{
    e.preventDefault()

    let params = {
        isValidEmail:  false,
        emailInput: EMAIL_INPUT,
        emailInputValue: EMAIL_INPUT.value,
        emailMinLength: 12,
    }

    validateEmail(params)
}

// if(emailInputValue.includes('@'))
//     {
//         emailInputElement.style.border ='2px solid #cccccc';
//         emailInputElement.style.backgroundColor = '#ffffff';

//     }

//     emailInputElement.style.border='2px solid red';
//     emailInputElement.style.backgroundColor = '#f4c2c2'

LOGIN_SUBMIT_BUTTON.addEventListener('click', ajaxRequest);