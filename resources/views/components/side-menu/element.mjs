(() => {
    const sideMenus = document.querySelectorAll("side-menu");
    sideMenus.forEach(sideMenu => {

        // Run only for newly initialized elements
        if (sideMenu.getAttribute("data-js-initialized") !== "false") return;
        sideMenu.setAttribute("data-js-initialized", true);


        const attribute = sideMenu.getAttribute("data-attribute");
        const sideMenuHeader = sideMenu.querySelector(`#js-${attribute}-header`);
        const squeezeButton = sideMenu.querySelector(`#js-${attribute}-squeeze-button`);

        squeezeButton.addEventListener("click", function () {
            sideMenu.classList.toggle("unfolded");
            sideMenuHeader.classList.toggle("hr");
            squeezeButton.classList.toggle("item-icon_reversed");
        });

        // Logout chain for the text
        const logoutTrigger = sideMenu.querySelector("#js-logout-trigger");
        const logoutButton = sideMenu.querySelector("logout-button button[type='submit']");

        logoutTrigger.addEventListener("click", () => {
            logoutButton.click(); // Trigger the click on the logout button
        });
    })


})();