import { isValidEmail, getErrorStyle, getErrorMessage } from './validation.js';

const USERNAME_INPUT = document.getElementById('usernameInput')
const EMAIL_INPUT = document.getElementById('emailInput');
const PASSWORD_INPUT = document.getElementById('passwordInput');
const RE_PASSWORD_INPUT = document.getElementById('re-passwordInput');
const REGISTER_SUBMIT_BUTTON = document.getElementById('registerSubmitButton');

alert('dfjk')
let validateEmail = ()=>{
    let emailParams = {
        isValidEmail:  false,
        emailInput: EMAIL_INPUT,
        emailInputValue: EMAIL_INPUT.value,
        emailMinLength: 12,
    }

    let emailErrors = isValidEmail(emailParams)

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
    console.log('dfjk')
}
validateEmail()
export { validateEmail };