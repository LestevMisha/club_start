import postRequest from "@apis/postRequest";

(() => {

    const xlogoutButtons = document.querySelectorAll("xlogout-button");
    xlogoutButtons.forEach(xlogoutButton => {

        // Run only for newly initialized elements
        if (xlogoutButton.getAttribute("data-js-initialized") !== "false") {return;}
        xlogoutButton.setAttribute("data-js-initialized", true);


        const form = xlogoutButton.querySelector("form");
        const xloader = xlogoutButton.querySelector("xloader");
        const confirmText = xlogoutButton.getAttribute("data-message");

        // Handle form submission
        form.addEventListener("submit", async (event) => {
            event.preventDefault();

            // Warn user about logout
            if (!confirm(confirmText)) {return;}

            xloader.classList.add("active");

            try {
                // Prepare API details
                const url = `${window.location.origin}/post/components/side-menu/logout`;
                const contentType = "application/x-www-form-urlencoded";

                // Send a logout request
                await postRequest(url, contentType);

            } catch (error) {
                console.error("Form submission error:", error);
            } finally {
                // Deactivate loader
                xloader.classList.remove("active");
            }
        });
    });
})();