document.addEventListener('livewire:initialized', () => {

    // helper function
    const applyStyles = (label, input = null, isFocused = false) => {
        // Remove previously added classes
        label.classList.remove("active-trans", "inactive-trans", "active-color", "inactive-color");

        // Add the appropriate classes based on the conditions
        const transformValue = isFocused || input?.validity?.valid ? "active-trans" : "inactive-trans";
        const colorValue = isFocused || input?.validity?.valid ? "active-color" : "inactive-color";

        label.classList.add(transformValue);
        label.classList.add(colorValue);
    };


    // helper function
    // Helper function
    const main = () => {
        // INPUT
        const modernWrappers = document.querySelectorAll(".modern-wrapper");

        modernWrappers.forEach(modernWrapper => {
            const modernLabel = modernWrapper.querySelector('.modern-label');
            const modernInput = modernWrapper.querySelector('.modern-input');

            applyStyles(modernLabel, modernInput, modernInput.value);
            modernInput.addEventListener("input", () => applyStyles(modernLabel, modernInput, true));
            modernInput.addEventListener("focus", () => applyStyles(modernLabel, modernInput, true));
            modernInput.addEventListener("blur", () => applyStyles(modernLabel, modernInput, false));
        });

        // LEARN/SHOW MORE
        const showChar = 140;
        const ellipsestext = "...";
        const moretext = "Показать больше";
        const lesstext = "Свернуть";

        document.querySelectorAll('.more').forEach(function (element) {
            const content = element.textContent.trim();
            const content_len = content.replace(/\s/g, "").length;

            if (content_len > showChar) {
                const c = content.substr(0, showChar);
                const h = content.substr(showChar);
                const html = `${c}<span class="moreellipses">${ellipsestext}&nbsp;</span><span class="morecontent" style="display:none;"><span>${h}</span>&nbsp;&nbsp;<a href="#" class="morelink">${moretext}</a></span>`;
                element.innerHTML = html;
            }
        });

        document.querySelectorAll(".morelink").forEach(function (link) {
            link.addEventListener("click", function (e) {
                e.preventDefault();

                if (this.classList.contains("less")) {
                    this.classList.remove("less");
                    this.textContent = moretext;
                } else {
                    this.classList.add("less");
                    this.textContent = lesstext;
                }

                const moreContent = this.closest('.morecontent');
                const moreEllipses = this.closest('.more').querySelector('.moreellipses');

                if (moreContent) {
                    moreContent.style.display = moreContent.style.display === 'none' ? '' : 'none';
                }
                if (moreEllipses) {
                    moreEllipses.style.display = moreEllipses.style.display === 'none' ? '' : 'none';
                }
            });
        });
    };

    // helper function
    function debounce(func, delay) {
        let timerId;

        return function () {
            const context = this;
            const args = arguments;

            clearTimeout(timerId);
            timerId = setTimeout(() => {
                func.apply(context, args);
            }, delay);
        };
    }

    // helper function
    const debouncedFunc = debounce((el) => {
        main();
    }, 0.1);

    // Run main js
    main();

    // Link js to just rendered components
    Livewire.hook('morph.updated', ({ el, component }) => {
        debouncedFunc(el);
    });
});