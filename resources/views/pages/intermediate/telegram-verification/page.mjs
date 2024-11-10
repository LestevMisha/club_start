import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import postRequest from "@apis/postRequest.mjs";
import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";


(() => {
    const button = document.querySelector("#js-delete-registration");
    const modernLoader = document.querySelector("modern-loader#js-telegram-verification-loader");

    // Handle delition request
    button.addEventListener("click", async (event) => {
        event.preventDefault();

        // Confirm request
        const confirmText = button.getAttribute("data-message");
        if (!confirm(confirmText)) return;

        // Activate loader
        modernLoader.classList.add("active");

        try {
            // reCAPTCHA verification
            const captchaResponse = await verifyRecaptcha();
            if (!captchaResponse?.success) return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);

            // Prepare form data and API details
            const url = `${window.location.origin}/post/telegram/verify/deleteUser`;
            const contentType = "application/x-www-form-urlencoded";

            // Handle redirect
            await postRequest(url, contentType);

        } catch (error) {
            console.error("Form submission error:", error);
        } finally {
            // Deactivate loader
            modernLoader.classList.remove("active");
        }

    });
})();
