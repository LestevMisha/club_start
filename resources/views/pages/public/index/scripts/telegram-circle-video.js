document.addEventListener("DOMContentLoaded", () => {

    const circles = document.querySelectorAll(".js-tg-circle");

    circles.forEach(circle => {
        const video = circle.querySelector(".js-tg-video");
        const circle_ = circle.querySelector(".js-tg-sub-circle");
        let prev = 0;
        let debouncer = true;

        circle_.addEventListener("click", () => {
            console.log("clicked");
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });

        video.addEventListener("timeupdate", () => {
            const currentTime = video.currentTime;
            const duration = video.duration;
            
            circle_.style.setProperty("--percent", `${(currentTime / duration) * 100}%`);
            circle_.style.background = `conic-gradient(
                from 0deg,
                #0d6efd 0%,
                #0d6efd var(--percent),
                transparent var(--percent),
                transparent 100%
            )`;
            if (currentTime === duration) {
                circle_.style.removeProperty("transition");
                debouncer = false;
            } else {
                if (debouncer) {
                    circle_.style.setProperty("transition", `--percent ${Math.abs(prev - currentTime)}s linear`);
                }
                debouncer = true;
            }
            prev = currentTime;
        });
    });
});