// Reset input to blank
export default function resetInput(e) {
    const modernWrapper = e.target.closest(".input-container");
    const modernInput = modernWrapper.querySelector(".input-field");
    modernInput.value = null;
    modernInput.focus();
};