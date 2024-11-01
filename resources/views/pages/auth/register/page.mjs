import postRequest from "@apis/post-request";
import reCAPTCHA from "@apis/reCAPTCHA.mjs";
import getElement from "@helpers/get-element.mjs";
import getReCAPTCHASiteKey from "@helpers/get-reCAPTCHA-site-key.mjs";
import renderValidationErrors from "@helpers/render-validation-errors";
// import renderBlockTime from "@helpers/render-block-time.mjs";
import renderComponentError from "@helpers/render-component-error.mjs";
import injectContentStylesAndScripts from "@helpers/inject-content-styles-and-scripts.mjs";

(() => {
    const form = getElement("#js-store-form");
    const emailComponent = form.querySelector("modern-input[data-atttribute='email']");
    const modernLoader = getElement("modern-loader#js-store-loader");

    // Handle form submission
    form.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Activate loader
        modernLoader.classList.add("active");

        try {
            // Prepare form data and API details
            const formData = new FormData(form);
            const url = `${window.location.origin}/post/register/store`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA validation
            const { success, errors } = await reCAPTCHA(getReCAPTCHASiteKey(), contentType);
            if (!success) {
                renderComponentError(emailComponent, errors.endpoint);
                return;
            }

            // Send form data
            const response = await postRequest(url, contentType, formData);
            if (response?.view) injectContentStylesAndScripts("#js-next-step", response.view);

            // Render any errors or handle response
            renderValidationErrors(form, response?.errors);
            // renderBlockTime(form, emailComponent, response?.availableIn);

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            // Deactivate loader
            modernLoader.classList.remove("active");
        }
    });
})();
