import{i as c}from"./injectContentStylesAndScripts-NbC_EnnH.js";function d(l,a={}){l.querySelectorAll(".js-validation").forEach(r=>{const i=r.getAttribute("data-attribute"),e=a[i],t=r.querySelector(".js-label"),s=r.querySelector(".js-input"),o=r.querySelector(".js-error-label");e?(c(o,e,!0),s.classList.add("error"),t.classList.add("error")):(o.innerHTML="",s.classList.remove("error"),t.classList.remove("error"))})}export{d as r};