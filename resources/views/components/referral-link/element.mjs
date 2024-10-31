import getElement from "@helpers/get-element.mjs";
import handleFieldError from "@helpers/handle-field-error.mjs";
import updateCountdown from "@helpers/update-countdown.mjs";
import postRequest from "@apis/post-request.mjs";
import reCAPTCHA from "@apis/reCAPTCHA.mjs";

(() => {
    
    const saveCardCredentialsForm = getElement('#js-save-card-credentials-form');
    const recaptchaKey = getElement('referral-link').getAttribute("data-recaptcha-key");

    // authentication
    saveCardCredentialsForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        const url = `${window.location.origin}/post/components/referral-link/saveCardCredentials`;
        const contentType = "application/x-www-form-urlencoded";
        const loader = getElement("#js-save-card-credentials-loader");
        const data = {
            "card-number": getElement("#js-card-number-input").value.replace(/\s/g, ""),
        };

        // reCAPTCHA
        const recaptchaResponse = await reCAPTCHA(recaptchaKey, contentType, loader);
        if (!recaptchaResponse?.success) return handleFieldError("card-number", recaptchaResponse.errors?.endpoint);

        const response = await postRequest(url, contentType, data, loader);
        handleFieldError("card-number", response.errors?.["card-number"]);

        // handle success
        if (response?.reload) window.location.reload();
        if (response?.availableIn) updateCountdown(parseInt(response?.availableIn), "card-number", "save-card-credentials");
    });

})();