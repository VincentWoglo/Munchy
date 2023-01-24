//https://heynode.com/tutorial/how-validate-and-sanitize-expressjs-form/
//https://www.synopsys.com/blogs/software-security/javascript-security-best-practices/ 
//Don't forget backend validation
let errors = document.getElementById('errors');
// let errorLog = document.getElementById('errorLog');
let errorsArray = {};

let isValidEmail = (params)=>{
    if(isCapitalWithNumbers(params.emailInputValue) == true)
        errorsArray['isCapitalWithNumbers'] = true
    else
        errorsArray['isCapitalWithNumbers'] = false;

    //IsMinLength requires the input value and the min chars you desire
    if(isMinLength(params.emailInputValue, params.emailMinLength) == true)
        errorsArray['isMinLength']  = true
    else
        errorsArray['isMinLength']  = false;

    //validate whether there's @ in the email on keyup
    containAtSymbol(params.emailInputValue)
    // displayErrors();

    return errorsArray
}


let containAtSymbol = (emailInputValue)=>{
    if(emailInputValue.includes('@'))
        errorsArray['containAtSymbol']  = true
    else
        errorsArray['containAtSymbol']  = false;
}

let isValidPassword = (passwordInput)=>{
    isValidPassword = false;
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
    let isUpperCase = false;
    
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
    
    errorsArray.forEach(htmlElement => {
        errors.innerHTML = htmlElement
    });
}

export { isMinLength, isCapitalWithNumbers, containAtSymbol, isValidPassword, isValidEmail, displayErrors }