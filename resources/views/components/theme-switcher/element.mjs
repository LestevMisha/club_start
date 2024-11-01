import postRequest from "@apis/post-request.mjs";
import getElements from "@helpers/get-elements.mjs";

(() => {
    const themeSwitchers = getElements("theme-switcher");
    themeSwitchers.forEach(themeSwitcher => {
        const uid = themeSwitcher.getAttribute("data-uid");
        const attribute = themeSwitcher.getAttribute("data-attribute");

        const input = themeSwitcher.querySelector(`theme-switcher[data-uid='${uid}'] #js-${attribute}-input`);
        const sunIcon = themeSwitcher.querySelector(`theme-switcher[data-uid='${uid}'] #js-${attribute}-sun`);
        const moonIcon = themeSwitcher.querySelector(`theme-switcher[data-uid='${uid}'] #js-${attribute}-moon`);
        const modernLoader = themeSwitcher.querySelector(`modern-loader[data-uid='${uid}']#js-${attribute}-loader`);


        input.addEventListener("change", async function (event) {
            event.preventDefault();

            // Activate loader
            modernLoader.classList.add("active");

            // Prepare form data and API details
            const url = `${window.location.origin}/post/redis/toggleState`;
            const contentType = "application/x-www-form-urlencoded";
            const globalName = "theme-state";
            const data = { "name": globalName };

            // Send form data
            const response = await postRequest(url, contentType, data);
            setCurrentTheme(response[globalName], themeSwitcher, moonIcon, sunIcon);

            modernLoader.classList.remove("active");

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