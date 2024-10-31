
// send a message
export default function showMessage(text, seconds = 3) {
    // Create the modal element
    const modal = document.createElement('div');
    modal.id = 'modal';
    modal.classList.add('b-modal');

    // Set the animation duration dynamically via CSS variable
    modal.style.setProperty('--modal-duration', `${seconds}s`);

    // Create the inner content
    const innerDiv = document.createElement('div');
    innerDiv.classList.add('flex', 'h', 'gap_05', 'align', 'justify');
    const textDiv = document.createElement('div');
    textDiv.classList.add('b-text', 'w');
    textDiv.textContent = text;

    // Append the text to the inner div, and inner div to the modal
    innerDiv.appendChild(textDiv);
    modal.appendChild(innerDiv);

    // Append modal to the body
    document.body.appendChild(modal);

    // Add animation class
    modal.classList.add('animate');

    // Remove modal after 2 seconds (and also remove the animation class)
    setTimeout(() => {
        modal.classList.remove('animate');
        document.body.removeChild(modal);
        modal.style.removeProperty('--modal-duration');
    }, seconds * 1000);
}