document.addEventListener("DOMContentLoaded", function () {

    const playCircles_1Atel = document.querySelectorAll('.MAIN__1Atel.video-container_1Atel');

    playCircles_1Atel.forEach(playCircle => {
        var video = playCircle.querySelector('.video_1Atel');
        var circle = playCircle.querySelector('.circle_1Atel');
        var prev = 0;
        var debouncer = true;

        playCircle.addEventListener("click", function () {
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