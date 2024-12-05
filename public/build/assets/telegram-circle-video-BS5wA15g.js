document.addEventListener("DOMContentLoaded",function(){document.querySelectorAll(".js-tg-circle").forEach(e=>{var r=e.querySelector(".js-tg-video"),e=e.querySelector(".js-tg-sub-circle"),c=0,n=!0;e.addEventListener("click",function(){console.log("clicked"),r.paused?r.play():r.pause()}),r.addEventListener("timeupdate",function(){var t=r.currentTime,a=r.duration;e.style.setProperty("--percent",`${t/a*100}%`),e.style.background=`conic-gradient(
                from 0deg,
                #0d6efd 0%,
                #0d6efd var(--percent),
                transparent var(--percent),
                transparent 100%
            )`,t===a?(e.style.removeProperty("transition"),n=!1):(n&&e.style.setProperty("transition",`--percent ${Math.abs(c-t)}s linear`),n=!0),c=t})})});
