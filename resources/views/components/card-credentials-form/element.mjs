// import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
import postRequest from "@apis/postRequest.mjs";
// import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
// import renderValidationErrors from "@helpers/renderValidationErrors";
// import renderBlockTime from "@helpers/renderBlockTime.mjs";

(() => {
    const xcardCredentialsForms = document.querySelectorAll("xcard-credentials-form");
    xcardCredentialsForms.forEach(xcardCredentialsForm => {

        // Run only for newly initialized elements
        if (xcardCredentialsForm.getAttribute("data-js-initialized") !== "false") { return; }
        xcardCredentialsForm.setAttribute("data-js-initialized", true);


        const form = xcardCredentialsForm.querySelector("form");
        const xloader = xcardCredentialsForm.querySelector("xloader");
        // const component = form.querySelector("xcredit-card-input[data-attribute='card-number']");
        // const button = form.querySelector("#js-card-number-button");

        // Handle form submission
        form.addEventListener("submit", async (event) => {
            xloader.classList.add("active");
            console.log("submitted");
            event.preventDefault();

            // Data Preparation
            const paymentUrl = `${window.location.origin}/post/telegram/verify/pay`;
            const paymentContentType = "application/json";

            const credentials = {
                cvv: form.querySelector("input[name='cvc']").value,
                cardNumber: form.querySelector("input[name='card-number']").value,
                expDateMonth: form.querySelector("input[name='expiration-month']").value,
                expDateYear: form.querySelector("input[name='expiration-year']").value,
            };

            // CloudPayments Checkout Process
            const checkout = new cp.Checkout({ publicId: "pk_638c1cbe6c9b25e7031feed32f02e", });
            checkout.createPaymentCryptogram(credentials)
                .then(async (cryptogram) => {
                    const paymentResponse = await postRequest(paymentUrl, paymentContentType, { "cryptogram": cryptogram });
                    const downloadForm = document.getElementById("downloadForm");
                    downloadForm.action = paymentResponse.AcsUrl;
                    downloadForm.querySelector("input[name='PaReq']").value = paymentResponse.PaReq;
                    downloadForm.querySelector("input[name='MD']").value = paymentResponse.MD;
                    downloadForm.querySelector("input[name='TermUrl']").value = paymentResponse.TermUrl;
                    downloadForm.submit();
                    xloader.classList.remove("active");
                }).catch((errors) => {
                    xloader.classList.remove("active");
                    console.log(errors);
                });

            // // Activate loader
            // xloader.classList.add("active");

            // try {
            //     // reCAPTCHA verification
            //     const captchaResponse = await verifyRecaptcha();
            //     if (!captchaResponse?.success) { return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message); }

            //     // Prepare form data and API details
            // const formData = new FormData(form);
            //     const saveUrl = `${window.location.origin}/post/components/card-credentials-form/saveCardCredentials`;
            //     const saveContentType = "application/x-www-form-urlencoded";
            // // Send form data
            // const saveResponse = await postRequest(saveUrl, saveContentType, formData);

            //     console.log("saveResponse: ", saveResponse);

            //     // // Render any errors or handle response
            //     // renderValidationErrors(form, saveResponse?.backend?.errors);
            //     // renderBlockTime(component, button, saveResponse?.backend?.availableIn);

            // } catch (error) {
            //     console.error("Form submission error:", error);
            // } finally {
            //     // // Deactivate loader
            //     // xloader.classList.remove("active");
            // }
        });

    });
})();