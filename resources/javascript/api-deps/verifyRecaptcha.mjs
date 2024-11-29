import postRequest from "../apis/postRequest.mjs";
import getReCAPTCHASiteKey from "../helpers/getReCAPTCHASiteKey.mjs";

export default function verifyRecaptcha() {
    return new Promise((resolve, reject) => {
        // eslint-disable-next-line no-undef
        grecaptcha.ready(() => {

            // Execute reCAPTCHA with 'submit' action
            // eslint-disable-next-line no-undef
            grecaptcha.execute(getReCAPTCHASiteKey(), { action: "submit" })
                .then(async (token) => {
                    try {
                        // Define reCAPTCHA verification URL and request payload
                        const contentType = "application/x-www-form-urlencoded";
                        const url = `${window.location.origin}/post/recaptacha/verify`;

                        // Perform fetch request for reCAPTCHA verification
                        const data = postRequest(url, contentType, { token });
                        resolve(data);
                    } catch (error) {
                        console.error("reCAPTCHA verification request failed:", error);
                        reject(error);
                    }
                })
                .catch(error => {
                    console.error("reCAPTCHA execution failed:", error);
                    reject(error);
                });
        });
    });
}
