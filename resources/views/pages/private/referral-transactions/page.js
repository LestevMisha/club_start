import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
import postRequest from "@apis/postRequest.mjs";

(() => {
    const withdrawButton = document.querySelector("xbutton[data-attribute='withdrawMoney']");
    const withdrawXloader = withdrawButton.querySelector("xloader");
    console.log(withdrawButton);
    console.log(withdrawXloader);
    // Handle form submission
    withdrawButton.addEventListener("click", async () => {

        // Activate loader
        withdrawXloader.classList.add("active");
        withdrawButton.classList.add("pointer-events-none");

        try {
            // Prepare form data and API details
            const url = `${window.location.origin}/post/referral-transaction/withdrawMoney`;
            const contentType = "application/x-www-form-urlencoded";

            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) {
                return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);
            }

            // Send form data
            const response = await postRequest(url, contentType);
            if (response) {
                return injectContentStylesAndScripts(document.body, response?.backend?.message);
            }

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            withdrawXloader.classList.remove("active");
            withdrawButton.classList.remove("pointer-events-none");
        }

    });
})();