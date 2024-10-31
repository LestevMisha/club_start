import postRequest from "@apis/post-request";
import reCAPTCHA from "@apis/reCAPTCHA.mjs";
import getElement from "@helpers/get-element.mjs";
import handleFieldError from "@helpers/handle-field-error.mjs";
import updateCountdown from "@helpers/update-countdown.mjs";
import getReCAPTCHASiteKey from "@helpers/get-reCAPTCHA-site-key.mjs";
import injectContentStylesAndScripts from "@helpers/inject-content-styles-and-scripts.mjs";

(() => {
    const form = getElement("#js-store-form");
    const loader = getElement("#js-store-loader");
    const url = `${window.location.origin}/post/register/store`;
    const contentType = "application/x-www-form-urlencoded";

    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        const data = new FormData(form);

        // Handle reCAPTCHA
        const { success, errors } = await reCAPTCHA(getReCAPTCHASiteKey(), contentType, loader);
        if (!success) return handleFieldError(errorHandler, errors?.endpoint);

        // Handle possible errors
        const response = await postRequest(url, contentType, data, loader);
        if (response?.errors) handleFieldErrors(response.errors);
        if (response?.view) injectContentStylesAndScripts("#js-next-step", response.view);
        if (response?.availableIn) updateCountdown(parseInt(response.availableIn), errorHandler, "reset-password");

    });

    // Handle errors for all fields
    function handleFieldErrors(errors) {
        const fields = ['name', 'email', 'password'];
        fields.forEach(field => {
            const error = errors?.[field];
            handleFieldError(field, error);
        });
    }
})();