console.log("✅ Developed by TAFM Team. https://thatsafatalmistake.com");

// keep scroll position when reloaded
document.addEventListener("DOMContentLoaded", function (event) {
    var scrollpos = localStorage.getItem('scrollpos');
    if (scrollpos) window.scrollTo(0, scrollpos);


    const videoIntroParentElement = document.getElementById("video-intro");
    if (videoIntroParentElement) {
        const videoIntro = videoIntroParentElement.querySelector("video");
        const remover = videoIntroParentElement.querySelector(".b-img.b-img_remove");
        const minimizer = videoIntroParentElement.querySelector(".b-img.b-img_remove.v1");
        var toggle = true;

        const toggleSizeAndMute = (isFirst = false) => {
            if (isFirst) toggle = !toggle;
            videoIntroParentElement.style.width = toggle ? "16em" : "8em";
            videoIntroParentElement.style.height = toggle ? "20em" : "10em";

            minimizer.style.display = minimizer.style.display === "flex" ? "none" : "flex";
            remover.style.display = minimizer.style.display === "flex" ? "none" : "flex";

            if (!isFirst) toggle = !toggle;
            videoIntro.muted = toggle;
        };

        remover.addEventListener("click", function () {
            if (minimizer.style.display === "flex") {
                toggleSizeAndMute(true);
            } else {
                videoIntroParentElement.remove();
            }
        });

        videoIntroParentElement.addEventListener("click", function () {
            toggleSizeAndMute();
        });
    }

});

window.onbeforeunload = function (e) {
    localStorage.setItem('scrollpos', window.scrollY);
};