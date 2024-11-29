document.addEventListener("DOMContentLoaded",function(){document.querySelectorAll(".MAIN__1Atel.video-container_1Atel").forEach(n=>{var e=n.querySelector(".video_1Atel"),t=n.querySelector(".circle_1Atel"),i=0,a=!0;n.addEventListener("click",function(){e.paused?e.play():e.pause()}),e.addEventListener("timeupdate",function(){var r=e.currentTime,o=e.duration;t.style.setProperty("--percent",`${r/o*100}%`),t.style.background=`conic-gradient(
                from 0deg,
                #0d6efd 0%,
                #0d6efd var(--percent),
                transparent var(--percent),
                transparent 100%
            )`,r===o?(t.style.removeProperty("transition"),a=!1):(a&&t.style.setProperty("transition",`--percent ${Math.abs(i-r)}s linear`),a=!0),i=r})})});
