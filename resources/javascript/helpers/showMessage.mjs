import injectContentStylesAndScripts from "./injectContentStylesAndScripts.mjs";

// send a message
export default function showMessage(content, seconds = 3, isHTML = false) {
    // Create the modal element
    const modal = document.createElement("div");
    modal.classList.add("bg-[#0d6efd]", "fixed", "right-1/2", "top-[-10%]", "z-999", "flex", "w-fit", "max-w-[30rem]", "translate-x-1/2", "rounded-lg", "px-4", "py-2", "opacity-0", "shadow-xs", "transition-all", "duration-500", "ease-[cubic-bezier(0.165,0.84,0.44,1)");
    modal.id = "modal";

    // Create the inner content
    const innerDiv = document.createElement("div");
    innerDiv.classList.add("flex", "flex-row", "gap-2", "items-center", "justify-center");
    const contentDiv = document.createElement("div");
    contentDiv.classList.add("text-white");
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
            modal.classList.add("opacity-100!", "top-4!");
        });
    });

    // Remove modal after amount of seconds (and also remove the animation class)
    const milliseconds = seconds * 1000;

    setTimeout(() => {
        modal.classList.remove("opacity-100!", "top-4!");
    }, milliseconds - 500);

    setTimeout(() => {
        document.body.removeChild(modal);
    }, milliseconds);
}