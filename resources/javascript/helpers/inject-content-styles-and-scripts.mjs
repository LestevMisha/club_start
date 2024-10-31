import setHTML from "./set-html.mjs";

// Function to create and append a script
const appendScript = (src, inlineContent) => {
    const script = document.createElement('script');
    if (src) {
        script.src = src;

        // Check if the script source ends with .mjs
        if (src.endsWith('.mjs')) {
            // Add any specific handling for .mjs files if needed
            script.type = 'module'; // Set type to 'module' for ES modules
        }
    } else {
        script.textContent = inlineContent;
    }
    document.body.appendChild(script);
};

// Function to create and append a style
const appendStyle = (href, inlineContent) => {
    const style = document.createElement(href ? 'link' : 'style');
    if (href) {
        style.href = href;
        style.type = 'text/css';
        style.rel = 'stylesheet';
        style.setAttribute('fetchpriority', 'low'); // Optional attribute for optimization
    } else {
        style.textContent = inlineContent;
    }
    document.head.appendChild(style);
};

// loadHTMLAndExecuteScriptsAndStyles
export default function injectContentStylesAndScripts(target, htmlString) {
    const container = document.createElement('div');
    container.innerHTML = htmlString;

    // Process script tags
    const scripts = container.querySelectorAll('script');
    scripts.forEach(script => {
        const src = script.src || null;
        const existingScript = document.querySelector(`script[src="${src}"]`);
        if (!existingScript) {
            appendScript(src, script.textContent);
        }
        script.remove(); // Clean up
    });

    // Process style tags
    const styles = container.querySelectorAll('style, link');
    styles.forEach(style => {
        const href = style.href || null;
        const existingStyle = document.querySelector(`link[rel='stylesheet'][href='${href}']`);
        if (!existingStyle) {
            appendStyle(href, style.textContent);
        }
        style.remove(); // Clean up
    });

    // 1. Insert the HTML content (excluding script and style tags) into the target
    setHTML(target, container.innerHTML);
};