import postRequest from "@apis/postRequest.mjs";

(() => {
    const xthemeSwitchers = document.querySelectorAll("xtheme-switcher");
    xthemeSwitchers.forEach(xthemeSwitcher => {

        // Run only for newly initialized elements
        if (xthemeSwitcher.getAttribute("data-js-initialized") !== "false") {return;}
        xthemeSwitcher.setAttribute("data-js-initialized", true);


        const attribute = xthemeSwitcher.getAttribute("data-attribute");
        const input = xthemeSwitcher.querySelector(`#js-${attribute}-input`);
        const sunIcon = xthemeSwitcher.querySelector(`#js-${attribute}-sun`);
        const moonIcon = xthemeSwitcher.querySelector(`#js-${attribute}-moon`);
        const xloader = xthemeSwitcher.querySelector("xloader");

        // Handle form submission
        input.addEventListener("change", async (event) => {
            event.preventDefault();

            // Activate loader
            xloader.classList.add("active");

            try {
                // Prepare form data and API details
                const url = `${window.location.origin}/post/toggleThemeState`;
                const contentType = "application/x-www-form-urlencoded";

                // Send form data
                const response = await postRequest(url, contentType);
                setCurrentTheme(response["theme"], moonIcon, sunIcon);

            } catch (error) {
                console.error("Form submission error:", error);
            } finally {
                // Deactivate loader
                xloader.classList.remove("active");
            }
        });
    });

    // helper functions
    function setCurrentTheme(isLightTheme, icon1, icon2) {
        if (isLightTheme) {
            document.body.classList.remove("dark");
        } else {
            document.body.classList.add("dark");
        }

        const action = isLightTheme ? "add" : "remove";
        const reverseAction = isLightTheme ? "remove" : "add";

        icon1.classList[action]("hidden");
        icon2.classList[reverseAction]("hidden");
    };

})();