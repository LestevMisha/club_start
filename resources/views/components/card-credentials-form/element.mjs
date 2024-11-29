import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import postRequest from "@apis/postRequest.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";
import renderBlockTime from "@helpers/renderBlockTime.mjs";

(() => {
    const xcardCredentialsForms = document.querySelectorAll("xcard-credentials-form");
    xcardCredentialsForms.forEach(xcardCredentialsForm => {

        // Run only for newly initialized elements
        if (xcardCredentialsForm.getAttribute("data-js-initialized") !== "false") {return;}
        xcardCredentialsForm.setAttribute("data-js-initialized", true);


        const form = xcardCredentialsForm.querySelector("form");
        const xloader = xcardCredentialsForm.querySelector("xloader");
        const component = form.querySelector("xcredit-card-input[data-attribute='card-number']");
        const button = form.querySelector("#js-card-number-button");

        // Handle form submission
        form.addEventListener("submit", async (event) => {
            event.preventDefault();

            // Activate loader
            xloader.classList.add("active");

            try {
                // reCAPTCHA verification
                const captchaResponse = await verifyRecaptcha();
                if (!captchaResponse?.success) {return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);}

                // Prepare form data and API details
                const formData = new FormData(form);
                const url = `${window.location.origin}/post/components/card-credentials-form/saveCardCredentials`;
                const contentType = "application/x-www-form-urlencoded";

                // Send form data
                const response = await postRequest(url, contentType, formData);

                // Render any errors or handle response
                renderValidationErrors(form, response?.backend?.errors);
                renderBlockTime(component, button, response?.backend?.availableIn);

            } catch (error) {
                console.error("Form submission error:", error);
            } finally {
                // Deactivate loader
                xloader.classList.remove("active");
            }
        });

    });
})();