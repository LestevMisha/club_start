import{p as m}from"./postRequest-CW2Znu5J.js";(()=>{document.querySelectorAll("xtheme-switcher").forEach(t=>{if(t.getAttribute("data-js-initialized")!=="false")return;t.setAttribute("data-js-initialized",!0);const e=t.getAttribute("data-attribute"),o=t.querySelector(`#js-${e}-input`),s=t.querySelector(`#js-${e}-sun`),n=t.querySelector(`#js-${e}-moon`),r=t.querySelector("xloader");o.addEventListener("change",async d=>{d.preventDefault(),r.classList.add("active");try{const a=`${window.location.origin}/post/redis/toggleState`,l="application/x-www-form-urlencoded",c="theme-state",u=await m(a,l,{name:c});i(u[c],n,s)}catch(a){console.error("Form submission error:",a)}finally{r.classList.remove("active")}})});function i(t,e,o){t?document.body.classList.remove("dark"):document.body.classList.add("dark");const s=t?"add":"remove",n=t?"remove":"add";e.classList[s]("hidden"),o.classList[n]("hidden")}})();