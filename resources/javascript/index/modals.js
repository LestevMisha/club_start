document.addEventListener("DOMContentLoaded", () => {
    (() => {
        const modalContainer = document.querySelector(".modal-container");

        document.querySelectorAll(".modal-button").forEach(button =>
            button.addEventListener("click", toggleModal.bind(null, true))
        );

        modalContainer.addEventListener("click", (event) => {
            if (event.target.classList.contains("modal-background")) {
                toggleModal(false);
            }
        });

        function toggleModal(state) {
            modalContainer.classList.toggle("active", state);
            modalContainer.classList.toggle("inactive", !state);
            document.querySelector("html").classList.toggle("modal-active", state);
        }
    })();
});
