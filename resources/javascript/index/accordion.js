document.addEventListener("DOMContentLoaded", () => {
    
    const target  = document.querySelector(".js-accordion-v1");
    const items = target.querySelectorAll(".js-accordion-item");
    console.log(target, items);
    items.forEach((item) => {

        item.addEventListener("click", () => {
            const textElement = item.querySelector(".js-accordion-text");
            const buttonElement = item.querySelector(".js-accordion-button");
            const isExpanded = buttonElement.classList.contains("expanded");
    
            // block multiple attempts
            if (isExpanded) {
                truncateText(textElement, 40);
                buttonElement.classList.remove("expanded");
            } else {
                buttonElement.classList.add("expanded");
                textElement.textContent = textElement.dataset.fullText;

                for (let i = 0; i < items.length; i++) {
                    const _buttonElement = items[i].querySelector(".js-accordion-button");
                    if (_buttonElement !== buttonElement) {
                        truncateText(textElement, 40);
                        _buttonElement.classList.remove("expanded");
                    }
                }
            }
            
        });
    });

    const textElements = target.querySelectorAll(".js-accordion-text");
    textElements.forEach(textElement => {
        textElement.dataset.fullText = textElement.textContent;
        truncateText(textElement, 40);
    });

    /* -------------------------------- hook Gloof49_ck --------------------------------  */

    function truncateText(element, maxLetters) {
        const text = element.textContent.replace(/\s+/g, "");
        if (text.length > maxLetters) {
            let truncatedText = "";
            let letterCount = 0;

            for (const char of element.textContent) {
                if (char !== " ") {
                    letterCount++;
                }
                if (letterCount > maxLetters) {
                    truncatedText += "...";
                    break;
                }
                truncatedText += char;
            }

            element.textContent = truncatedText;
        }
    }
});