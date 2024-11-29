import getCsrfToken from "../helpers/getCsrfToken.mjs";

export default async function postRequest(url, contentType, parameters = {}) {
    try {
        // Prepare the body based on content type
        const body = contentType === "application/json"
            ? JSON.stringify(parameters)
            : new URLSearchParams(parameters);

        // Send POST request
        const response = await fetch(url, {
            method: "POST",
            headers: {
                "X-Requested-With": "XMLHttpRequest", // Custom header to identify AJAX requests (for Laravel)
                "X-CSRF-TOKEN": getCsrfToken(),
                "Content-Type": contentType,
            },
            body: body,
        });

        // Handle redirection
        if (response.redirected) {

            // Bypassing CORS using 303 for the different website redirection
            if (response.status === 303) {
                const redirectUrl = response.headers.get("X-Redirect-URL");
                if (redirectUrl) {
                    return window.location.replace(redirectUrl);
                }
            }
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
