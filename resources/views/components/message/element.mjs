(() => {
    const xmessages = document.querySelectorAll("xmessage");
    xmessages.forEach(xmessage => {

        // Run only for newly initialized elements
        if (xmessage.getAttribute("data-js-initialized") !== "false") {return;}
        xmessage.setAttribute("data-js-initialized", true);


        // provide smooth appearance
        xmessage.classList.add("opacity-100!", "top-4!");

        const seconds = parseInt(xmessage.getAttribute("data-seconds")) * 1000;
        // animate transition time for the last 0.5 seconds
        const fadeOutTime = seconds - 500;

        // provide smooth vanishing
        setTimeout(() => {
            xmessage.classList.remove("opacity-0!", "top-4!");
        }, fadeOutTime);

        // remove xmessage
        setTimeout(() => {
            document.body.removeChild(xmessage);
        }, seconds);
    });
})();