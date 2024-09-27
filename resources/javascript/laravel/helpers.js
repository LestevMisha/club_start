
// Get Element
window.getElement = function (selector) {
    return document.querySelector(selector);
}

// Set innerHTML
window.setHTML = function (selector, html) {
    getElement(selector).innerHTML = html;
}

// Reset input to blank
window.resetInput = function (e) {
    const modernWrapper = e.target.closest(".input-container");
    const modernInput = modernWrapper.querySelector(".input-field");
    modernInput.value = null;
    modernInput.focus();
};

// Function to update the countdown timer
window.updateCountdown = function (seconds, target, form) {
    const errorElement = getElement(`#js-${form}-form #js-${target}-error-label`);
    const countdownElement = getElement(`#js-${form}-form #js-${target}-error-label .b-text`);
    const buttonElement = getElement(`#js-${form}-form button[type='submit']`);
    const inputElement = getElement(`#js-${form}-form #js-${target}-input`);

    if (!countdownElement) return;
    if (!buttonElement) return;
    if (!inputElement) return;

    buttonElement.disabled = true;
    inputElement.setAttribute("readonly", true);

    const interval = setInterval(() => {
        seconds--;
        countdownElement.textContent = `You exceeded the limit, please try again later. Wait time: ${seconds} seconds.`;
        buttonElement.disabled = true;
        inputElement.setAttribute("readonly", true);
        if (seconds <= 0) {
            clearInterval(interval);
            errorElement.textContent = ''; // Clear message when done
            inputElement.classList.remove("input-field-error");
            inputElement.removeAttribute("readonly");
            buttonElement.disabled = false;
        }
    }, 1000);

}

// displays errros
window.handleFieldError = function (field, error) {
    const input = getElement(`#js-${field}-input`);
    if (!input) return;

    const label = getElement(`#js-${field}-label`);
    if (!label) return;

    if (error) {
        setHTML(`#js-${field}-error-label`, error);
        input.classList.add("input-field-error");
        label.classList.add("input-label-error");
    } else {
        setHTML(`#js-${field}-error-label`, "");
        input.classList.remove("input-field-error");
        label.classList.remove("input-label-error");
    }
}

/* ('Very' custom function)
   it is used for register.blade.php to dynamically load componenets with scripts
   because when component is loaded by partial technique it doesn't compile the scripts.
   this function creates new scripts and runs the same content to compile it into a current view. 
*/
window.loadHTMLAndExecuteScriptsAndStyles = function (target, htmlString) {
    const element = document.createElement('div');
    element.innerHTML = htmlString;

    // Extract and execute script tags
    const scripts = element.querySelectorAll('script');
    const newScripts = [];
    scripts.forEach(script => {
        const existingScript = document.querySelector(`script[src="${script.src}"]`);
        if (script.src && !existingScript) {
            const newScript = document.createElement('script');
            newScript.src = script.src;
            newScripts.push(newScript);
        } else if (!script.src) {
            const inlineScript = document.createElement('script');
            inlineScript.textContent = script.textContent;
            newScripts.push(inlineScript);
        }
        script.remove();
    });

    // Extract and apply style tags
    const styles = element.querySelectorAll('style, link');
    const newStyles = [];

    styles.forEach(style => {
        const existingStyle = document.querySelectorAll(`link[type='text/css'][rel='stylesheet'][href='${style.href}']`)[0];

        if (style.href && !existingStyle) {
            const newStyle = document.createElement('link');

            newStyle.setAttribute('fetchpriority', 'low');
            newStyle.type = 'text/css';
            newStyle.rel = 'stylesheet';
            newStyle.href = style.href;

            newStyles.push(newStyle);
        } else if (!style.href) {
            const inlineStyle = document.createElement('style');
            inlineStyle.textContent = style.textContent;
            newStyles.push(inlineStyle);
        }

        style.remove();
    });

    // 1. Insert the HTML content without the script and style tags
    setHTML(target, element.outerHTML);

    // 2. Append styles to the head if they don't already exist
    newStyles.forEach(newStyle => {
        document.head.appendChild(newStyle);
    });

    // 3. Append scripts to the body to trigger execution if they don't already exist
    newScripts.forEach(newScript => {
        document.body.appendChild(newScript);
    });
}

