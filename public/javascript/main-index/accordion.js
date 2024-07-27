document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));


    /* -------------------------------- hook Gloof49_ck --------------------------------  */
    // make text shorter ... for accordion
    function truncateText(element, maxLetters) {
        let text = element.textContent.replace(/\s+/g, '');
        if (text.length > maxLetters) {
            let truncatedText = '';
            let letterCount = 0;

            for (let char of element.textContent) {
                if (char !== ' ') {
                    letterCount++;
                }
                if (letterCount > maxLetters) {
                    truncatedText += '...';
                    break;
                }
                truncatedText += char;
            }

            element.textContent = truncatedText;
        }
    }
    const textElements = document.querySelectorAll('.accordion-item .b-text.b-text_2em');
    const buttons = document.querySelectorAll('.accordion-item button');

    textElements.forEach(textElement => {
        // Store the full text in a data attribute
        textElement.dataset.fullText = textElement.textContent;
        truncateText(textElement, 40);
    });

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            const textElement = this.querySelector('.b-text.b-text_2em');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            if (!isExpanded) {
                // If not expanded, truncate the text
                truncateText(textElement, 40);
            } else {
                // If expanded, show the full text
                textElement.textContent = textElement.dataset.fullText;
            }
        });
    });
});