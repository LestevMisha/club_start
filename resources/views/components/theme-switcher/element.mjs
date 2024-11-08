import postRequest from "@apis/postRequest.mjs";

(() => {
    const themeSwitchers = document.querySelectorAll("theme-switcher");
    themeSwitchers.forEach(themeSwitcher => {

        // Run only for newly initialized elements
        if (themeSwitcher.getAttribute("data-js-initialized") !== "false") return;
        themeSwitcher.setAttribute("data-js-initialized", true);


        const attribute = themeSwitcher.getAttribute("data-attribute");
        const input = themeSwitcher.querySelector(`#js-${attribute}-input`);
        const sunIcon = themeSwitcher.querySelector(`#js-${attribute}-sun`);
        const moonIcon = themeSwitcher.querySelector(`#js-${attribute}-moon`);
        const modernLoader = themeSwitcher.querySelector(`modern-loader`);

        // Handle form submission
        input.addEventListener("change", async (event) => {
            event.preventDefault();

            // Activate loader
            modernLoader.classList.add("active");

            try {
                // Prepare form data and API details
                const url = `${window.location.origin}/post/redis/toggleState`;
                const contentType = "application/x-www-form-urlencoded";
                const globalName = "theme-state";
                const data = { "name": globalName };

                // Send form data
                const response = await postRequest(url, contentType, data);
                setCurrentTheme(response[globalName], themeSwitcher, moonIcon, sunIcon);

            } catch (error) {
                console.error("Form submission error:", error);
            } finally {
                // Deactivate loader
                modernLoader.classList.remove("active");
            }
        });
    });

    // helper functions
    function setCurrentTheme(isLightTheme, switcher, icon1, icon2) {
        document.body.className = isLightTheme ? "lightMode" : "darkMode";
        switcher.checked = isLightTheme;

        const action = isLightTheme ? 'add' : 'remove';
        const reverseAction = isLightTheme ? 'remove' : 'add';

        icon1.classList[action]("icon-inactive");
        icon2.classList[reverseAction]("icon-inactive");
    };

})();