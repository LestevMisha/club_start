import resetInput from "@helpers/resetInput.mjs";

(() => {
    const modernInputs = document.querySelectorAll("modern-input");
    modernInputs.forEach(modernInput => {

        // Run only for newly initialized elements
        if (modernInput.getAttribute("data-js-initialized") !== "false") return;
        modernInput.setAttribute("data-js-initialized", true);


        const attribute = modernInput.getAttribute("data-attribute");
        const button = modernInput.querySelector(`#js-${attribute}-button`);
        button.addEventListener("click", (e) => {
            resetInput(e);
        });
    });
})();