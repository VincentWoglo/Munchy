//https://heynode.com/tutorial/how-validate-and-sanitize-expressjs-form/
//https://www.synopsys.com/blogs/software-security/javascript-security-best-practices/ 
//Don't forget backend validation

const EMAIL_INPUT = document.getElementById('emailInput');
const PASSWORD_INPUT = document.getElementById('passwordInput');
const LOGIN_SUBMIT_BUTTON = document.getElementById('loginSubmitButton');
let errors = document.getElementById('errors');
let errorLog = document.getElementById('errorLog');
let errorsArray = [];

let isValidEmail = (e)=>{
    isValidEmail = false;
    emailInput = e.target;
    emailInputValue = e.target.value;
    emailMinLength = 12;

    isCapitalWithNumbers(emailInputValue) == true ? errorsArray.push('email is capital') : 
        errorsArray.push('email is not capital');
    //IsMinLength requires the input value and the min chars you desire
    isMinLength(emailInputValue, emailMinLength) != true ? 
        errorsArray.push('invalid length') : errorsArray.push('valid length');

    //validate whether there's @ in the email on keyup
    if(emailInputValue.includes('@'))
    {
        emailInput.style.border ='2px solid #cccccc';
        emailInput.style.backgroundColor = '#ffffff';

    }
    else
    {
        emailInput.style.border='2px solid red';
        emailInput.style.backgroundColor = '#f4c2c2';
    }
    displayErrors();
}

let isValidPassword = (passwordInput)=>{
    isValidPassword = false;
    //validate whether there's @ in the email on keyup
    //check length (min 8 chars)
    //must contain a number and chars
    //contain capital letter
}

let isMinLength = (input, minChars)=>{
    //check length (min 8 chars) (min 12 chars)
    //must contain a number and chars

    if(input.length >= minChars)
        return true;
    else
        return false;
}

let isCapitalWithNumbers = (input)=>{
    isUpperCase = false;
    for(let i = 0; i<input.length; i++)
    {
        if(input[i].toUpperCase() === input[i])
            isUpperCase = true;
    }
    return isUpperCase;
}

let displayErrors = ()=>{
    for(let a = 0; a<errorsArray.length; a++)
    {
        //create element

        errors.innerHTML = errorsArray[a]
    }
    errorsArray.forEach(element => {
        errors.innerHTML = element
    });
}

EMAIL_INPUT.addEventListener('keyup', isValidEmail, false);
PASSWORD_INPUT.addEventListener('keyup', isValidPassword);