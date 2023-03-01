import { isValidEmail, containsLetter, getErrorStyle, getErrorMessage, isValidPassword } from './validation.js';

const LOGIN_SUBMIT_BUTTON = document.getElementById('loginSubmitButton');
const EMAIL_INPUT = document.getElementById('emailInput');
const PASSWORD_INPUT = document.getElementById('passwordInput');

const EMAIL_CONTAIN_AT_SYMBOL_ERROR = document.getElementById('emailcontainAtSymbolError');
// const EMAIL_IS_MIN_LENGTH_ERROR = document.getElementById('emailisMinLengthError');
const CONTAINS_CAPITAL_LETTER_ERROR = document.getElementById('containsCapitalLetterError');

const PASSWORD_MIN_LENGTH_ERROR = document.getElementById('passwordMinLengthError')
let errors = document.getElementById('errors');

//Check validation
// console.log(containsLetter(EMAIL_INPUT))

let validateEmail = (param)=>{
    let emailErrors = isValidEmail(param);

    if(emailErrors.containAtSymbol.type == false)
    {
        getErrorStyle(EMAIL_INPUT, 'red', '#f4c2c2');

        getErrorMessage(EMAIL_CONTAIN_AT_SYMBOL_ERROR, 'block', emailErrors.containAtSymbol.message);
    }
    else
    {
        getErrorStyle(EMAIL_INPUT, '#cccccc', 'white')

        EMAIL_CONTAIN_AT_SYMBOL_ERROR.style.display = 'none'
    }

    // if(emailErrors.isMinLength.type == false)
    // {
    //     getErrorStyle(EMAIL_INPUT, 'red', '#f4c2c2');

    //     getErrorMessage(EMAIL_IS_MIN_LENGTH_ERROR, 'block', emailErrors.isMinLength.message);
    // }
    // else
    // {
    //     getErrorStyle(EMAIL_INPUT, '#cccccc', 'white')

    //     EMAIL_IS_MIN_LENGTH_ERROR.style.display = 'none'
    // }

    if(emailErrors.containsCapitalLetter.type == false)
    {
        getErrorStyle(EMAIL_INPUT, 'red', '#f4c2c2');

        getErrorMessage(CONTAINS_CAPITAL_LETTER_ERROR, 'block', emailErrors.containsCapitalLetter.message);
    }
    else
    {
        getErrorStyle(EMAIL_INPUT, '#cccccc', 'white')

        CONTAINS_CAPITAL_LETTER_ERROR.style.display = 'none'
    }
}

let validatePassword = (params)=>{
    let passwordErrors = isValidPassword(params)
    console.log(passwordErrors)

    if(passwordErrors.passwordIsMinLength.type == false){
        getErrorStyle(PASSWORD_INPUT, 'red', '#f4c2c2');

        getErrorMessage(PASSWORD_MIN_LENGTH_ERROR, 'block', passwordErrors.passwordIsMinLength.message);
    }
    else
    {
        getErrorStyle(PASSWORD_INPUT, '#cccccc', 'white')

        PASSWORD_MIN_LENGTH_ERROR.style.display = 'none'
    }
}

let ajaxRequest = (event)=>{
    event.preventDefault()

    let emailParams = {
        isValidEmail:  false,
        emailInput: EMAIL_INPUT,
        emailInputValue: EMAIL_INPUT.value,
        emailMinLength: 12,
    }

    validateEmail(emailParams)

    let passwordParam = {
        passwordInputValue: PASSWORD_INPUT.value,
        passwordMinLength: 8
    }

    validatePassword(passwordParam)
}

LOGIN_SUBMIT_BUTTON.addEventListener('click', ajaxRequest);