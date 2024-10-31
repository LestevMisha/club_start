import postRequest from "@apis/post-request";
import reCAPTCHA from "@apis/reCAPTCHA.mjs";
import getElement from "@helpers/get-element.mjs";
import handleFieldError from "@helpers/handle-field-error.mjs";
import getReCAPTCHASiteKey from "@helpers/get-reCAPTCHA-site-key.mjs";

(() => {
    const button = getElement("#js-delete-registration");
    const loader = getElement("#js-telegram-verification-loader");
    const url = `${window.location.origin}/post/telegram/verify/deleteUser`;
    const contentType = "application/x-www-form-urlencoded";

    button.addEventListener("click", async (event) => {
        event.preventDefault();

        // Handle deletion
        const confirmText = button.getAttribute("data-message");
        if (!confirm(confirmText)) return;

        // Handle reCAPTCHA
        const { success, errors } = await reCAPTCHA(getReCAPTCHASiteKey(), contentType, loader);
        if (!success) return handleFieldError(errorHandler, errors?.endpoint);

        // Handle redirect
        await postRequest(url, contentType, {}, loader);

    });
})();
