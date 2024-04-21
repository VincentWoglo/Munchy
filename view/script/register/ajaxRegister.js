const registerButton = document.querySelector("#registerSubmitButton");
const registerInputWrapper = document.querySelector(".registerInputWrapper");

registerButton.addEventListener("click", (event) => {
    event.preventDefault();
    const userData = new FormData(registerInputWrapper);

    const xhr = new XMLHttpRequest();

    xhr.open('POST', '/Munchy/register', true);
    xhr.onload = (e) => {
        if (xhr.readyState === 4) {
            // Remove existing error messages
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(message => message.remove());

            const response = JSON.parse(xhr.responseText);
            // Get the 'message' value from the response
            for (let i = 0; i < response.length; i++) {
                console.log(response[i]);

                const fieldInput = document.getElementById(response[i].fieldName);
                fieldInput.style.border = "1px solid #FF0000";

                const inputErrorLabels = document.createElement("div");
                inputErrorLabels.textContent = response[i].message;
                inputErrorLabels.classList.add("error-message"); // Add a class for styling

                // Insert the error message element after the input field
                fieldInput.parentNode.insertBefore(inputErrorLabels, fieldInput.nextSibling);
            }
        }
    };

    xhr.send(userData);
});
