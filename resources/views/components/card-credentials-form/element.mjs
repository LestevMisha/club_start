import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import postRequest from "@apis/postRequest.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";
import renderBlockTime from "@helpers/renderBlockTime.mjs";

(() => {
    const cardCredentialsForms = document.querySelectorAll("card-credentials-form");
    cardCredentialsForms.forEach(cardCredentialsForm => {

        // Run only for newly initialized elements
        if (cardCredentialsForm.getAttribute("data-js-initialized") !== "false") return;
        cardCredentialsForm.setAttribute("data-js-initialized", true);


        const form = cardCredentialsForm.querySelector("form");
        const modernLoader = cardCredentialsForm.querySelector("modern-loader");
        const component = form.querySelector("modern-credit-card-input[data-attribute='card-number']");
        const button = form.querySelector("#js-card-number-button");

        // Handle form submission
        form.addEventListener("submit", async (event) => {
            event.preventDefault();

            // Activate loader
            modernLoader.classList.add("active");

            try {
                // reCAPTCHA verification
                const captchaResponse = await verifyRecaptcha();
                if (!captchaResponse?.success) return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);

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
                modernLoader.classList.remove("active");
            }
        });

    });
})();