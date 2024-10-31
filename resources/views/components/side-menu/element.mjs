import getElement from "@helpers/get-element.mjs";

(() => {
    const sideMenu = getElement("#js-side-menu");
    const sideMenuHeader = getElement("#js-side-menu_header");
    const squeezeButton = getElement("#js-squeeze-button");
    squeezeButton.addEventListener("click", function () {
        sideMenu.classList.toggle("unfolded");
        sideMenuHeader.classList.toggle("hr");
        squeezeButton.classList.toggle("item-icon_reversed");
    });
})();