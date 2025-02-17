document.addEventListener("DOMContentLoaded", () => {
    (() => {
        const modalOuter = document.querySelector(".js-modal-outer");

        document.querySelectorAll(".js-modal-button").forEach(button => {
            button.addEventListener("click", () => {
                toggleModal();
                const content = button.querySelector(".js-modal-content");
                const modalInner = modalOuter.querySelector(".js-modal-inner");
                if (modalInner && content) {
                    modalInner.innerHTML = content.innerHTML;
                }
            });
        });

        modalOuter.addEventListener("click", (event) => {
            if (event.target.classList.contains("js-modal-middle")) {
                toggleModal();
            }
        });

        document.querySelectorAll(".js-modal-close").forEach((modalClose) => {
            modalClose.addEventListener("click", () => {
                toggleModal();
            });
        });

        function toggleModal() {
            modalOuter.classList.toggle("hidden");
            document.querySelector("html").classList.toggle("overflow-hidden!");
        }
    })();
});
