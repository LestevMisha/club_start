export default function getCsrfToken() {
    // Get CSRF token from meta tag
    const csrfToken = document.querySelector("meta[name='csrf-token']")?.content;
    if (!csrfToken) {
        console.error("CSRF token not found in meta tags.");
        throw new Error("CSRF token is missing.");
    }
    return csrfToken;
}
