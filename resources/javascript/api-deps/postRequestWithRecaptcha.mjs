
// import getCsrfToken from "../helpers/getCsrfToken.mjs";
// import showMessage from "../helpers/show-message.mjs";
// import postRequestReCAPTCHA from "./postRequestReCAPTCHA.mjs";


// export default async function postRequestWithRecaptcha() {
//     try {
//         // Perform reCAPTCHA validation
//         const reCAPTCHAResult = await postRequestReCAPTCHA();
//         console.log("reCAPTCHAResult: ", reCAPTCHAResult);

//         // Check reCAPTCHA success
//         const { success, errors } = reCAPTCHAResult;
//         if (!success) {
//             return showMessage(errors?.endpoint || "Unknown reCAPTCHA error", 10, true);
//         }

//         // Determine body format based on content type
//         const body = contentType === 'application/json'
//             ? JSON.stringify(parameters)
//             : new URLSearchParams(parameters);

//         // Send POST request
//         const response = await fetch(url, {
//             method: 'POST',
//             headers: {
//                 "X-CSRF-TOKEN": getCsrfToken(),
//                 'Content-Type': contentType,
//             },
//             body: body,
//         });

//         // Parse JSON response and handle response messages
//         const data = await response.json();
//         if (data?.message) {
//             return showMessage(errors.message, 10, true);
//         }

//         return data;
//     } catch (error) {
//         console.error("Request failed:", error);
//         throw error;
//     }
// }