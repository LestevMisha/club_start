(() => {
    const xinputs = document.querySelectorAll("xinput");
    xinputs.forEach(xinput => {

        // Run only for newly initialized elements
        if (xinput.getAttribute("data-js-initialized") !== "false") {return;}
        xinput.setAttribute("data-js-initialized", true);

        const attribute = xinput.getAttribute("data-attribute");
        const button = xinput.querySelector(`#js-${attribute}-button`);
        const input = xinput.querySelector(`#js-${attribute}-input`);
        button.addEventListener("click", (e) => {
            input.value = null;
            input.focus();
        });
    });
})();