document.addEventListener("DOMContentLoaded", () => {
    
    
    /* -------------------------------- Accordion_v1 hook f2jvis8 --------------------------------  */
    createAccordion(".js-accordion-v1");
    /* -------------------------------- Accordion_v2 hook Dc3mzz1 --------------------------------  */
    createAccordion(".js-accordion-v2");


    function createAccordion(selector) {
        const target  = document.querySelector(selector);
        const items = target.querySelectorAll(".js-accordion-item");
    
        items.forEach((item) => {
            item.addEventListener("click", (e) => {
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
                        const _textElement = items[i].querySelector(".js-accordion-text");
                        if (items[i] !== item && _buttonElement.classList.contains("expanded")) {
                            truncateText(_textElement, 40);
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
    }


    // helpers
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