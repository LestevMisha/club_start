import getElements from "@helpers/get-elements.mjs";

(() => {
    const sideMenus = getElements("side-menu");
    sideMenus.forEach(sideMenu => {
        const uid = sideMenu.getAttribute("data-uid");
        const attribute = sideMenu.getAttribute("data-attribute");
        const sideMenuHeader = sideMenu.querySelector(`side-menu[data-uid='${uid}'] #js-${attribute}-header`);
        const squeezeButton = sideMenu.querySelector(`side-menu[data-uid='${uid}'] #js-${attribute}-squeeze-button`);

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