import getElement from "./get-element.mjs";

export default function getReCAPTCHASiteKey() {
    return getElement("meta[name='recaptcha-site-key']")?.content;
}