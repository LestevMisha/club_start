document.addEventListener("DOMContentLoaded",function(){const r=document.getElementById("video-intro");if(r){const t=r.querySelector("video"),n=r.querySelector(".b-img.b-img_remove"),e=r.querySelector(".b-img.b-img_remove.v1");var a=!0;const l=(s=!1)=>{s&&(a=!a),r.style.width=a?"16em":"8em",r.style.height=a?"20em":"10em",e.style.display=e.style.display==="flex"?"none":"flex",n.style.display=e.style.display==="flex"?"none":"flex",s||(a=!a),t.muted=a};n.addEventListener("click",function(){e.style.display==="flex"?l(!0):r.remove()}),r.addEventListener("click",function(){l()})}function x(t){const n=t.querySelector("#follow-gradient"),e=t.querySelector("#follow-gradient .grad-text");e.textContent=f(2e4);let l=0,s=0,g=!1;var u=n.getBoundingClientRect();t.addEventListener("mousemove",function(c){u=n.getBoundingClientRect(),l=c.clientX-u.left,s=c.clientY-u.top,g||(g=!0,e.textContent=f(1e4),requestAnimationFrame(S))});function S(){const c=`${l-u.width/2}px ${s-u.height/2}px`;n.style.maskPosition=c,n.style.backgroundPosition=c,g=!1}}function f(t){let n="";for(let e=0;e<t;e++)n+=" KLUB START ";return n}const y=document.getElementById("gradient-effect_bf2");y&&x(y);function p(){const t=document.getElementById("responsive-img");window.innerWidth<1250?t.src="assets/images/dan-6.png":t.src="assets/images/dan-4.png"}p(),window.addEventListener("resize",p);var i=document.getElementById("subs"),o=document.getElementById("add-price"),I=document.getElementById("add-price-value"),h=document.getElementById("subs-value"),d=document.getElementById("banknote"),m=document.getElementById("min-result"),v=document.getElementById("max-result");h.innerHTML=i.value,I.innerHTML=o.value.toLocaleString("ru-RU"),m.textContent=(parseInt(i.value)*.005*parseInt(o.value)).toLocaleString("ru-RU"),v.textContent=(parseInt(i.value)*.03*parseInt(o.value)).toLocaleString("ru-RU"),o.oninput=function(){I.innerHTML=this.value.toLocaleString("ru-RU"),m.textContent=(parseInt(i.value)*.005*parseInt(o.value)).toLocaleString("ru-RU"),v.textContent=(parseInt(i.value)*.03*parseInt(o.value)).toLocaleString("ru-RU"),d.style.opacity=.7},i.oninput=function(){h.innerHTML=this.value,m.textContent=(parseInt(i.value)*.005*parseInt(o.value)).toLocaleString("ru-RU"),v.textContent=(parseInt(i.value)*.03*parseInt(o.value)).toLocaleString("ru-RU"),d.style.opacity=.7},o.onchange=function(){d.style.opacity=.2},i.onchange=function(){d.style.opacity=.2},L(document.querySelector(".b-img.b-img_v23"),(t,n,e)=>{t.style.transform=`translateY(-${-n.height+e/2}px)`});function L(t,n){document.addEventListener("scroll",function(){const e=t.getBoundingClientRect(),l=window.scrollY;e.top>e.height||e.top<-e.height||n(t,e,l)})}});