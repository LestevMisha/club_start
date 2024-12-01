(() => {
    const xsideMenus = document.querySelectorAll("xside-menu");
    xsideMenus.forEach(xsideMenu => {

        // Run only for newly initialized elements
        if (xsideMenu.getAttribute("data-js-initialized") !== "false") {
            return;
        }
        xsideMenu.setAttribute("data-js-initialized", true);


        const attribute = xsideMenu.getAttribute("data-attribute");
        const xsideMenuHeader = xsideMenu.querySelector(`#js-${attribute}-header`);
        const openInFullButton = xsideMenu.querySelector(`#js-${attribute}-open-in-full-button`);
        const closeFullscreen = xsideMenu.querySelector(`#js-${attribute}-close-fullscreen-button`);
        const input = xsideMenu.querySelector(`#js-${attribute}-input`);

        const showDocsButton = document.querySelector("#js-show-docs");
        const docsContent = document.querySelector("#js-docs-content");

        showDocsButton.addEventListener("click", () => {
            if (!xsideMenu.classList.contains("unfolded")) {handler();}           
        });

        input.addEventListener("click", handler);

        // helper function
        function handler() {
            xsideMenu.classList.toggle("unfolded");
            
            // Dynamically set style properties instead of using a non-existent class
            const isUnfolded = xsideMenu.classList.contains("unfolded");
            xsideMenuHeader.style.flexDirection = isUnfolded ? "row" : "column";

            setCurrentState(closeFullscreen.classList.contains("hidden"), openInFullButton, closeFullscreen);

            // Dynamically close documents folder if opened
            if (docsContent.classList.contains("!h-20")) {
                docsContent.classList.toggle("!h-20");
            }
        }

        showDocsButton.addEventListener("click", (e) => {
            if (!docsContent.contains(e.target) && e.target !== docsContent) {
                docsContent.classList.toggle("!h-20");
            }
        });

        // Logout chain for the text
        const logoutTrigger = xsideMenu.querySelector("#js-logout-trigger");
        const logoutButton = xsideMenu.querySelector("logout-button button[type='submit']");

        logoutTrigger.addEventListener("click", () => {
            logoutButton.click(); // Trigger the click on the logout button
        });
    });

    // helper functions
    function setCurrentState(isExpanded, icon1, icon2) {    
        const action = isExpanded ? "add" : "remove";
        const reverseAction = isExpanded ? "remove" : "add";
    
        icon1.classList[action]("hidden");
        icon2.classList[reverseAction]("hidden");
    };
})();