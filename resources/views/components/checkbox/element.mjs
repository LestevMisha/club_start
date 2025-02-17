import postRequest from "@apis/postRequest";

(() => {

    const xCheckboxes = document.querySelectorAll("xcheckbox");
    xCheckboxes.forEach(xcheckbox => {

        // Run only for newly initialized elements
        if (xcheckbox.getAttribute("data-js-initialized") !== "false") { return; }
        xcheckbox.setAttribute("data-js-initialized", true);

        // Handle form submission
        xcheckbox.addEventListener("click", async () => {
            try {
                // Prepare API details
                const url = `${window.location.origin}/post/components/checkbox/setRememberMe`;
                const contentType = "application/x-www-form-urlencoded";

                // Send a logout request
                await postRequest(url, contentType, { "remember_me": xcheckbox.querySelector(".checkbox").value === "true" });

            } catch (error) {
                console.error("Form submission error:", error);
            }
        });
    });


    document.querySelectorAll("button.checkbox").forEach((btn) => {
        const parent = btn.parentElement;
        if (!parent) { return; }

        const text = parent.querySelector(".checkbox-text");
        const svg = parent.querySelector("svg");

        const toggleCheckbox = () => {
            const isChecked = btn.getAttribute("data-state") === "checked";
            // Toggle attributes
            btn.setAttribute("data-state", isChecked ? "unchecked" : "checked");
            btn.setAttribute("value", isChecked ? "false" : "true");
            // Toggle SVG display
            if (svg) {
                svg.style.display = isChecked ? "none" : "block";
            }
        };

        // Attach to both the button and the label text
        btn.addEventListener("click", toggleCheckbox);
        text?.addEventListener("click", toggleCheckbox);
    });
})();
