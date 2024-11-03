import postRequest from "@apis/post-request";
import getElements from "@helpers/get-elements.mjs";

(() => {

    const logoutButtons = getElements("logout-button");
    logoutButtons.forEach(logoutButton => {
        const form = logoutButton.querySelector("form");
        const modernLoader = logoutButton.querySelector("modern-loader");
        const confirmText = logoutButton.getAttribute("data-message");

        // Handle form submission
        form.addEventListener("submit", async function (event) {
            event.preventDefault();

            // Warn user about logout
            if (!confirm(confirmText)) return;

            modernLoader.classList.add("active");

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
                modernLoader.classList.remove("active");
            }
        });
    });
})()