import getElement from "./get-element.mjs";

// Set innerHTML
export default function setHTML(selector, html) {
    getElement(selector).innerHTML = html;
}