(() => {

    // Select the node that will be observed for mutations
    const targetNode = document.body;

    // Options for the observer (which mutations to observe)
    const config = { attributes: true, childList: true, subtree: true };

    // Callback function to execute when mutations are observed
    const callback = (mutationList, observer) => {
        for (const mutation of mutationList) {
            const xreadMore = mutation.target.querySelector("xread-more");
            if (xreadMore) {
                if (xreadMore.getAttribute("data-js-initialized") === "false") {
                    show(xreadMore);
                }
            }
        }
    };

    // Create an observer instance linked to the callback function
    const observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations
    observer.observe(targetNode, config);

    // init
    const xreadMores = document.querySelectorAll("xread-more");
    xreadMores.forEach((xreadMore) => {
        // Run only for newly initialized elements
        if (xreadMore.getAttribute("data-js-initialized") !== "false") { return; }
        show(xreadMore);
    });

    // helper optimization
    function show(element) {
        element.setAttribute("data-js-initialized", true);
        initialize(element);
        element.classList.remove("hidden!");
    }

    // initizlize any read-more element
    function initialize(element) {

        const elementConfig = {
            showChar: element.getAttribute("data-show-char"),
            leftoverLimit: element.getAttribute("data-leftover-limit"),
            ellipsesText: element.getAttribute("data-ellipses-text"),
            moreText: element.getAttribute("data-read-more"),
            lessText: element.getAttribute("data-read-less"),
        };

        const textElement = element.querySelector(".more");
        const content = textElement.textContent;
        const leftover = content.length - elementConfig.showChar;

        if (content.length > elementConfig.showChar && leftover >= elementConfig.leftoverLimit) {
            // Create the truncated and hidden content elements
            const visibleContent = document.createTextNode(content.slice(0, elementConfig.showChar));
            const hiddenContent = document.createElement("span");
            hiddenContent.classList = "hidden!";
            hiddenContent.innerHTML = content.slice(elementConfig.showChar);

            // Create ellipses and link elements
            const ellipses = document.createElement("span");
            ellipses.classList = "hidden inline!";
            ellipses.innerHTML = `${elementConfig.ellipsesText}&nbsp;`;

            const moreLink = document.createElement("a");
            moreLink.classList.add("text-[#0d6efd]");
            moreLink.href = "#";
            moreLink.innerHTML = elementConfig.moreText;

            // Append all elements dynamically
            textElement.textContent = ""; // Clear original content
            textElement.appendChild(visibleContent);
            textElement.appendChild(ellipses);
            textElement.appendChild(hiddenContent);
            textElement.appendChild(moreLink);

            // Event delegation to handle clicks on "morelink" links
            moreLink.addEventListener("click", (event) => {
                event.preventDefault();
                moreLink.innerHTML = `&nbsp;${moreLink.classList.contains("less") ? elementConfig.moreText : elementConfig.lessText}`;
                moreLink.classList.toggle("less");
                hiddenContent.classList.toggle("hidden!");
                ellipses.classList.toggle("inline!");
            });
        }
    }

})();