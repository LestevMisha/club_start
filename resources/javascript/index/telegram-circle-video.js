document.addEventListener("DOMContentLoaded", function () {

    const circles = document.querySelectorAll('.js-tg-circle');

    circles.forEach(circle => {
        var video = circle.querySelector('.js-tg-video');
        var circle = circle.querySelector('.js-tg-sub-circle');
        var prev = 0;
        var debouncer = true;

        circle.addEventListener("click", function () {
            console.log("clicked");
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });

        video.addEventListener('timeupdate', function () {
            var currentTime = video.currentTime;
            var duration = video.duration;
            
            circle.style.setProperty('--percent', `${(currentTime / duration) * 100}%`);
            circle.style.background = `conic-gradient(
                from 0deg,
                #0d6efd 0%,
                #0d6efd var(--percent),
                transparent var(--percent),
                transparent 100%
            )`;

            if (currentTime === duration) {
                circle.style.removeProperty("transition");
                debouncer = false;
            } else {
                if (debouncer) {
                    circle.style.setProperty('transition', `--percent ${Math.abs(prev - currentTime)}s linear`);
                }
                debouncer = true;
            }

            prev = currentTime;
        });

    });

   

});