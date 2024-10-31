import getElement from "@helpers/get-element.mjs";
import postRequest from "@apis/post-request.mjs";

(() => {
    // set default
    const name = "js-theme-switcher";

    const themeSwitcher = getElement(`#${name}`);
    const sunIcon = getElement("#js-sun");
    const moonIcon = getElement("#js-moon");

    themeSwitcher.addEventListener("change", async function (event) {
        event.preventDefault();
        // toggle
        setCurrentTheme(themeSwitcher.checked);
        const url = `${window.location.origin}/post/redis/toggleState`;
        const contentType = "application/x-www-form-urlencoded";
        const data = {
            "name": name
        };
        await postRequest(url, contentType, data);
    });

    // helper functions
    function setCurrentTheme(isLightTheme) {
        document.body.className = isLightTheme ? "lightMode" : "darkMode";
        themeSwitcher.checked = isLightTheme;

        const action = isLightTheme ? 'add' : 'remove';
        const reverseAction = isLightTheme ? 'remove' : 'add';

        moonIcon.classList[action]("icon-inactive");
        sunIcon.classList[reverseAction]("icon-inactive");
    };

})();