export default function getReCAPTCHASiteKey() {
    // Get reCAPTCHA site key from meta tag
    const siteKey = document.querySelector("meta[name='recaptcha-site-key']")?.content;
    if (!siteKey) {
        console.error("reCAPTCHA site key not found in meta tags.");
        return new Error("reCAPTCHA site key is missing.");
    }
    return siteKey;
}