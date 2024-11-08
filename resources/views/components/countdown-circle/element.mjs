(() => {
    const countdownCircles = document.querySelectorAll("countdown-circle");
    countdownCircles.forEach(countdownCircle => {
        const loop = countdownCircle.getAttribute("data-loop") === "true";
        const messageRemoval = countdownCircle.getAttribute("data-message-removal") === "true";
        const seconds = parseInt(countdownCircle.getAttribute("data-seconds"), 10);
        const size = countdownCircle.getAttribute("data-size");
        let countdown = seconds;

        // Set CSS properties
        countdownCircle.style.setProperty('--size', size);
        countdownCircle.style.setProperty('--seconds', `${countdown}s`);
        countdownCircle.style.setProperty('--seconds-half', `${countdown / 2}s`);

        // Set initial countdown display
        const countdownElement = countdownCircle.querySelector("#js-countdown");
        countdownElement.textContent = countdown;

        // Countdown function
        function interval() {
            countdown = --countdown <= 0 ? (loop ? seconds : 0) : countdown;
            countdownElement.textContent = countdown;
            if (countdown <= 0) {
                if (messageRemoval) {
                    document.body.removeChild(countdownCircle.closest("message"));
                }
                countdownCircle.classList.add("inactive");
                clearInterval(intervalId);
            }
        }

        // Start countdown
        let intervalId = setInterval(interval, 1000);

        // Restart countdown on click
        let startTime = 0;
        countdownCircle.addEventListener("click", () => {
            const state = getComputedStyle(countdownCircle);
            const isRunning = state.getPropertyValue("--animation-play-state") === "running";

            const difference = parseInt(new Date().getTime()) - parseInt(startTime === 0 ? new Date().getTime() : startTime);
            clearInterval(intervalId);

            if (isRunning) {
                setTimeout(() => {
                    countdownCircle.style.setProperty('--animation-play-state', "paused");
                }, difference);
            } else {
                intervalId = setInterval(() => {
                    startTime = new Date().getTime();
                    interval();
                    countdownCircle.style.setProperty('--animation-play-state', "running");
                }, 1000);
            }
        });
    });
})();
