import renderBlockTime from "@helpers/renderBlockTime.mjs";
import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import renderValidationErrors from "@helpers/renderValidationErrors";
import postRequest from "@apis/postRequest.mjs";

(() => {
    const form = document.querySelector("#js-authenticate-form");
    const modernLoader = document.querySelector("modern-loader#js-authenticate-loader");

    // Handle form submission
    form.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Activate loader
        modernLoader.classList.add("active");

        try {
            // Prepare form data and API details
            const formData = new FormData(form);
            const url = `${window.location.origin}/post/login/authenticate`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const { success, errors } = await verifyRecaptcha();

            // Show error message if verification fails
            if (!success) {
                injectContentStylesAndScripts(document.body, errors.error);
                return;
            }

            // Send form data
            const response = await postRequest(url, contentType, formData);

            // Render any errors or handle response
            renderValidationErrors(form, response?.errors);
            renderBlockTime(form, "email", response?.availableIn);

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            // Deactivate loader
            modernLoader.classList.remove("active");
        }
    });
})();
