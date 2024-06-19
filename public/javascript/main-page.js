document.addEventListener("DOMContentLoaded", function () {

    // Chair Preview
    const optimize_LCP = document.getElementById("optimize_LCP-mobile");

    function setOptimizedImage() {
        const imagePath = (window.innerWidth >= 1250) ?
            "images/min-png/sneakers-chair.png" :
            "images/min-png/sneakers-chair-extromin.png";

        optimize_LCP.src = imagePath;
    }

    setOptimizedImage(); // Call initially
    window.addEventListener("resize", setOptimizedImage);


    // Expand an image
    const images = document.querySelectorAll(".b-img.b-img_v22.v22\\.1");

    images.forEach(image => {
        image.addEventListener("click", () => {
            if (image.classList.contains("expanded")) {
                image.classList.remove("expanded");
            } else {
                image.classList.add("expanded");
            }
        });
    });


    // // Cursor-follow
    // const cursorFollowBox = document.getElementById("cursor_follow_box");
    // const cursor = document.getElementById("cursor_follow");
    // var rect, cursorX, cursorY;
    // let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // cursorFollowBox.addEventListener("mousemove", function (e) {
    //     rect = cursorFollowBox.getBoundingClientRect();
    //     cursorX = e.clientX - rect.left - (cursor.getBoundingClientRect().width / 2);
    //     cursorY = e.clientY - rect.top - (cursor.getBoundingClientRect().height / 2);

    //     // Ensure the cursor doesn't go outside the container
    //     requestAnimationFrame(animate);
    // });

    // document.addEventListener('scroll', function () {
    //     let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    //     let scrollDelta = scrollTop - lastScrollTop;

    //     if (cursorY > 0 && cursorY < (rect.height - cursor.getBoundingClientRect().height)) {
    //         cursorY += scrollDelta;
    //     }

    //     lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling

    //     // Ensure the cursor doesn't go outside the container
    //     requestAnimationFrame(animate);
    // });


    // function animate() {
    //     if (cursorX < 0) cursorX = 0;
    //     if (cursorY < 0) cursorY = 0;
    //     if (cursorX > rect.width - cursor.getBoundingClientRect().width) cursorX = rect.width - cursor.getBoundingClientRect().width;
    //     if (cursorY > rect.height - cursor.getBoundingClientRect().height) cursorY = rect.height - cursor.getBoundingClientRect().height;

    //     cursor.style.left = `${cursorX}px`;
    //     cursor.style.top = `${cursorY}px`;
    // }


    // Backgroun grad-text
    function gradientize(target) {
        const followGrad = target.querySelector('#follow-gradient');
        const gradText = target.querySelector('#follow-gradient .grad-text');
    
        gradText.textContent = generateRandomString(20_000);
    
        let mouseX = 0;
        let mouseY = 0;
        let isMoving = false;
        var rect = followGrad.getBoundingClientRect();

        target.addEventListener("mousemove", function (event) {
            rect = followGrad.getBoundingClientRect();
            mouseX = event.clientX - rect.left;
            mouseY = event.clientY - rect.top;
            if (!isMoving) {
                isMoving = true;
                gradText.textContent = generateRandomString(10_000);

                requestAnimationFrame(updatePosition);
            }
        });

        function updatePosition() {
            const currentPosition = `${mouseX - (rect.width / 2)}px ${mouseY - (rect.height / 2)}px`;
            followGrad.style.maskPosition = currentPosition;
            followGrad.style.backgroundPosition = currentPosition;
            isMoving = false;
        }
    }

    const gradTarget = document.getElementById("gradient-effect_bf1");
    if (gradTarget) {
        gradientize(gradTarget);
    }

    const gradTarget1 = document.getElementById("gradient-effect_bf2");
    if (gradTarget1) {
        gradientize(gradTarget1);
    }




    function generateRandomString(length) {
        let result = "";
        for (let i = 0; i < length; i++) {
            result += " KLUB START ";
        }
        return result;
    }

});
