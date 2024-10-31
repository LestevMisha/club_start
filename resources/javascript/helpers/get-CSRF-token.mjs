import getElement from "./get-element.mjs";

export default function getCSRFToken() {
    return getElement("meta[name='csrf-token']")?.content;
}