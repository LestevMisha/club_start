import getCsrfToken from "../helpers/getCsrfToken.mjs";

export default async function postRequest(url, contentType, parameters = {}) {
    try {
        // Prepare the body based on content type
        const body = contentType === 'application/json'
            ? JSON.stringify(parameters)
            : new URLSearchParams(parameters);

        // Send POST request
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN": getCsrfToken(),
                'Content-Type': contentType,
            },
            body: body,
        });

        // Handle redirection
        if (response.redirected) {
            return window.location.replace(response.url);
        }

        // Handle response status
        if (!response.ok) {
            throw new Error(`${response.status}: ${response.statusText}`);
        }

        // Parse JSON response
        const data = await response.json();
        return data;

    } catch (error) {
        console.error("Request failed:", error);
        throw error;
    }
}
