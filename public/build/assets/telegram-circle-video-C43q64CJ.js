document.addEventListener("DOMContentLoaded",()=>{document.querySelectorAll(".js-tg-circle").forEach(c=>{const e=c.querySelector(".js-tg-video"),t=c.querySelector(".js-tg-sub-circle");let s=0,n=!0;t.addEventListener("click",()=>{console.log("clicked"),e.paused?e.play():e.pause()}),e.addEventListener("timeupdate",()=>{const r=e.currentTime,o=e.duration;t.style.setProperty("--percent",`${r/o*100}%`),t.style.background=`conic-gradient(
                from 0deg,
                #0d6efd 0%,
                #0d6efd var(--percent),
                transparent var(--percent),
                transparent 100%
            )`,r===o?(t.style.removeProperty("transition"),n=!1):(n&&t.style.setProperty("transition",`--percent ${Math.abs(s-r)}s linear`),n=!0),s=r})})});
