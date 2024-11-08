import injectContentStylesAndScripts from "./injectContentStylesAndScripts.mjs";

// send a message
export default function showMessage(content, seconds = 3, isHTML = false) {
    // Create the modal element
    const modal = document.createElement('div');
    modal.classList.add('b-modal', 'b-modal_v1');
    modal.id = 'modal';

    // Create the inner content
    const innerDiv = document.createElement('div');
    innerDiv.classList.add('flex', 'h', 'gap_05', 'align', 'just-center');

    const contentDiv = document.createElement('div');
    contentDiv.classList.add('b-text');
    if (isHTML) {
        injectContentStylesAndScripts(contentDiv, content, true);
    } else {
        contentDiv.textContent = content;
    }

    // Append the content to the inner div, and inner div to the modal
    innerDiv.appendChild(contentDiv);
    modal.appendChild(innerDiv);

    // Append modal to the body
    document.body.appendChild(modal);

    // Add a slight delay to ensure the animation starts from scratch
    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            modal.classList.add('active');
        });
    });

    // Remove modal after amount of seconds (and also remove the animation class)
    const milliseconds = seconds * 1000;

    setTimeout(() => {
        modal.classList.remove('active');
    }, milliseconds - 500);

    setTimeout(() => {
        document.body.removeChild(modal);
    }, milliseconds);
}