document.addEventListener("DOMContentLoaded", function () {
    const optimize_LCP = document.getElementById("optimize_LCP-mobile");

    function setOptimizedImage() {
        const imagePath = (window.innerWidth >= 1250) ?
            "images/min-png/sneakers-chair-min.png" :
            "images/min-png/sneakers-chair-extromin.png";

        optimize_LCP.src = imagePath;
    }

    setOptimizedImage(); // Call initially

    window.addEventListener("resize", setOptimizedImage);
});
