//https://heynode.com/tutorial/how-validate-and-sanitize-expressjs-form/
//https://www.synopsys.com/blogs/software-security/javascript-security-best-practices/ 
//Don't forget backend validation
let errorsArray = {};

let isValidEmail = (params)=>{
    if(containsCapitalLetter(params.emailInputValue) == true)
        errorsArray['containsCapitalLetter'] = {type: true}
    else
    {
        errorsArray['containsCapitalLetter'] = {
            type: false,
            message: 'Include a captial letter' 
        }
    }

    //IsMinLength requires the input value and the min chars you desire
    //Remove this from email
    // if(isMinLength(params.emailInputValue, params.emailMinLength) == true)
    //     errorsArray['isMinLength']  = {type: true}
    // else
    // {
    //     errorsArray['isMinLength']  = {
    //         type: false,
    //         message: 'Check the length of your email' 
    //     }
    // }

    //validate whether there's @ in the email on keyup
    containAtSymbol(params.emailInputValue)
    // displayErrors();

    return errorsArray
}

let isValidPassword = (params)=>{
    //check length (min 8 chars)
    if(isMinLength(params.passwordInputValue, params.passwordMinLength) == true)
        errorsArray['passwordIsMinLength']  = {type: true}
    else
    {
        errorsArray['passwordIsMinLength']  = {
            type: false,
            message: 'Password should be at least 8 chars' 
        }
    }
    //must contain a number and chars

    //contain capital letter

    //contain number
    if(containsNumber(params.passwordInputValue)){}
    return errorsArray
}


let containAtSymbol = (emailInputValue)=>{
    if(emailInputValue.includes('@'))
        errorsArray['containAtSymbol']  = {type: true}
    else
    {
        errorsArray['containAtSymbol']  = {
            type: false,
            message: 'Include @ symbal in your email' 
        }
    };
}

let isValidPasswords = (passwordInput)=>{
    isValidPasswords = false;
    //check length (min 8 chars)
    //must contain a number and chars
    //contain capital letter
}


let containsLetter = (input) =>{
    let isUpperCase = false;
    let numberOfCapitalChars = 0;

    for(let i = 0; i<input.value.length; i++)
    {
        if(input.value[i].toUpperCase() === input.value[i])
        {
            numberOfCapitalChars ++;
            isUpperCase = true
        }
            
    }

    return isUpperCase;
}

let getErrorStyle = (input, borderColor, backgroundColor)=>{
    input.style.border= `2px solid ${borderColor}`
    input.style.backgroundColor = backgroundColor
}

let getErrorMessage = (input, displayStyle, errorMessage)=>{
    input.style.display = displayStyle
    input.innerText = errorMessage
}

//return boolean
let containsNumber = (input)=>{
    return /\d/.test(input)
}

let isMinLength = (input, minChars)=>{
    if(input.length >= minChars)
        return true;
    else
        return false;
}

let inputIsEmpty = (input)=>{
    if(input.length > 1)
        return true
    else
        return false
}

let containsCapitalLetter = (input)=>{
    let isUpperCase = false;
    
    for(let i = 0; i < input.length; i++)
    {
        if(input[i].toUpperCase() === input[i])
            isUpperCase = true;
            console.log(input[i])
    }
    console.log(isUpperCase)

    return isUpperCase;
}

export { 
    containsLetter, 
    containsNumber, 
    isValidEmail, 
    getErrorStyle, 
    getErrorMessage, 
    isValidPassword
}