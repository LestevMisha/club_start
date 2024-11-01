import postRequest from "./post-request";

// reCAPTCHA handling
export default function reCAPTCHA(site_key, contentType) {
    return new Promise((resolve, reject) => {
        grecaptcha.ready(function () {
            grecaptcha.execute(site_key, { action: 'submit' })
                .then(async (token) => {

                    const url = `${window.location.origin}/post/recaptacha/verify`;
                    const data = { "token": token };

                    const response = await postRequest(url, contentType, data);
                    resolve(response);

                })
                .catch(error => reject(error)); // Reject the promise if grecaptcha.execute fails
        });
    });
}
