// import verifyRecaptcha from "@api-deps/verifyRecaptcha.mjs";
// import postRequest from "@apis/postRequest.mjs";
// import injectContentStylesAndScripts from "@helpers/injectContentStylesAndScripts.mjs";
// import renderValidationErrors from "@helpers/renderValidationErrors";

// (() => {
//     const form = document.querySelector("#js-store-form");
//     const xloader = document.querySelector("xloader#js-store-loader");

//     // Handle form submission
//     form.addEventListener("submit", async (event) => {
//         event.preventDefault();

//         // Activate loader
//         xloader.classList.add("active");

//         try {
//             // reCAPTCHA verification
//             const captchaResponse = await verifyRecaptcha();
//             if (!captchaResponse?.success) {return injectContentStylesAndScripts(document.body, captchaResponse?.backend?.message);}

//             // Prepare form data and API details
//             const url = `${window.location.origin}/post/telegram/verify/pay`;
//             const contentType = "application/x-www-form-urlencoded";

//             // Send data
//             const response = await postRequest(url, contentType, {
//                 "amount": 5000,
//                 "cryptogram": "",
//             });
//             console.log(response);
//             // if (response?.backend?.view) {injectContentStylesAndScripts(injectionElement, response.backend.view);}

//             // Render any errors or handle response
//             // renderValidationErrors(form, response?.backend?.errors);

//         } catch (error) {
//             console.error("Form submission error:", error);
//         } finally {
//             // Deactivate loader
//             xloader.classList.remove("active");
//         }
//     });

// })();
