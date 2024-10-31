import getCSRFToken from "../helpers/get-CSRF-token.mjs";

// GET Request Laravel
export default async function getRequest(url) {
    try {
        let responsePromise = await fetch(url, {
            method: 'GET',
            headers: {
                "X-CSRF-TOKEN": getCSRFToken(),
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