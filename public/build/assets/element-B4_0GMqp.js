(()=>{document.querySelectorAll("xpassword-input").forEach(t=>{if(t.getAttribute("data-js-initialized")!=="false")return;t.setAttribute("data-js-initialized",!0);const e=t.getAttribute("data-attribute"),i=t.querySelector(`#js-${e}-eye`),c=t.querySelector(`#js-${e}-closed-eye`),n=t.querySelector(`#js-${e}-input`);t.querySelector(`#js-${e}-button`).addEventListener("click",()=>{o(i.classList.contains("!hidden"),n,i,c)})});function o(t,e,i,c){const n=t?"remove":"add",s=t?"add":"remove";i.classList[n]("!hidden"),c.classList[s]("!hidden"),e.type=t?"text":"password"}})();