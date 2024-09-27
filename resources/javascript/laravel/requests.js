
const csrf_token = document.querySelector("meta[name='csrf-token']")?.content;

// POST Request Laravel
window.postRequest = async function (url, contentType, parameters = {}, loader = null) {
    try {
        loader && (loader.style.display = "block");

        const response = await fetch(url, {
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN": csrf_token,
                'Content-Type': contentType,
            },
            body: new URLSearchParams(parameters),
        });

        if (!response.ok) throw new Error(response.status);

        return await response.json();
    } catch (error) {
        console.error(error);
        throw error;
    } finally {
        loader && (loader.style.display = "none");
    }
}


// reCAPTCHA handling
window.reCAPTCHA = function (site_key, contentType, loader = null) {
    return new Promise((resolve, reject) => {
        grecaptcha.ready(function () {
            grecaptcha.execute(site_key, { action: 'submit' })
                .then(async (token) => {

                    const url = `${window.location.origin}/post/recaptacha/verify`;
                    const data = { "token": token };

                    const response = await postRequest(url, contentType, data, loader);
                    resolve(response);                    

                })
                .catch(error => reject(error)); // Reject the promise if grecaptcha.execute fails
        });
    });
}

// GET Request Laravel
window.getRequest = async function (url) {
    try {
        let responsePromise = await fetch(url, {
            method: 'GET',
            headers: {
                "X-CSRF-TOKEN": csrf_token,
            }
        });
        if (!responsePromise.ok) {
            throw new Error(responsePromise.status);
        }
        return await responsePromise.json();
    } catch (error) {
        alert(error);
    }
}