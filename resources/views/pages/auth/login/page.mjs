import postRequest from "@apis/post-request";
import reCAPTCHA from "@apis/reCAPTCHA.mjs";
import getElement from "@helpers/get-element.mjs";
import handleFieldError from "@helpers/handle-field-error.mjs";
import updateCountdown from "@helpers/update-countdown.mjs";
import getReCAPTCHASiteKey from "@helpers/get-reCAPTCHA-site-key.mjs";

(() => {
    const form = getElement("#js-authenticate-form");
    const loader = getElement("#js-authenticate-loader");
    const url = `${window.location.origin}/post/login/authenticate`;
    const contentType = "application/x-www-form-urlencoded";
    const errorHandler = "email";

    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        const data = new FormData(form);

        // Handle reCAPTCHA
        const { success, errors } = await reCAPTCHA(getReCAPTCHASiteKey(), contentType, loader);
        if (!success) return handleFieldError(errorHandler, errors?.endpoint);

        // Handle possible errors
        const response = await postRequest(url, contentType, data, loader);
        if (response?.errors?.email !== undefined) handleFieldError(errorHandler, response.errors.email);
        if (response?.errors?.password !== undefined) handleFieldError("password", response.errors.password);
        if (response?.availableIn !== undefined) updateCountdown(parseInt(response.availableIn), errorHandler, "authenticate");

    });
})();
