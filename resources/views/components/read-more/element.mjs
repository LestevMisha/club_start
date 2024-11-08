(() => {

    const readMores = document.querySelectorAll("read-more");
    readMores.forEach(function (readMore) {

        // Run only for newly initialized elements
        if (readMore.getAttribute("data-js-initialized") !== "false") return;
        readMore.setAttribute("data-js-initialized", true);


        // Config
        const config = {
            showChar: readMore.getAttribute("data-show-char"),
            ellipsesText: readMore.getAttribute("data-ellipses-text"),
            moreText: readMore.getAttribute("data-read-more"),
            lessText: readMore.getAttribute("data-read-less"),
        }

        const textElement = readMore.querySelector(".b-text");
        const content = textElement.innerHTML;

        if (content.length > config.showChar) {
            // Create the truncated and hidden content elements
            const visibleContent = document.createTextNode(content.slice(0, config.showChar));
            const hiddenContent = document.createElement("span");
            hiddenContent.classList = "morecontent active";
            hiddenContent.innerHTML = content.slice(config.showChar);

            // Create ellipses and link elements
            const ellipses = document.createElement("span");
            ellipses.classList = "moreellipses active";
            ellipses.innerHTML = config.ellipsesText + "&nbsp;";

            const moreLink = document.createElement("a");
            moreLink.href = "#";
            moreLink.innerHTML = config.moreText;

            // Append all elements dynamically
            textElement.innerHTML = ""; // Clear original content
            textElement.appendChild(visibleContent);
            textElement.appendChild(ellipses);
            textElement.appendChild(hiddenContent);
            textElement.appendChild(moreLink);

            // Event delegation to handle clicks on "morelink" links
            moreLink.addEventListener("click", function (event) {
                event.preventDefault();
                moreLink.innerHTML = "&nbsp;" + (moreLink.classList.contains("less") ? config.moreText : config.lessText);
                moreLink.classList.toggle("less");
                hiddenContent.classList.toggle("active");
                ellipses.classList.toggle("active");
            });
        }
    });


})();