(() => {
    const messages = document.querySelectorAll("message");
    messages.forEach(message => {

        // Run only for newly initialized elements
        if (message.getAttribute("data-js-initialized") !== "false") return;
        message.setAttribute("data-js-initialized", true);


        // provide smooth appearance
        message.classList.add("active");

        const seconds = parseInt(message.getAttribute("data-seconds")) * 1000;
        const fadeOutTime = seconds - 500;

        // provide smooth vanishing
        setTimeout(() => {
            message.style.opacity = 0;
        }, fadeOutTime);

        // remove message
        setTimeout(() => {
            document.body.removeChild(message);
        }, seconds);
    });
})();