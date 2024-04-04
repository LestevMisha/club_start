document.addEventListener("DOMContentLoaded", function () {

    // Remove spaces from Card Number Input
    $("#card_number").on("input", function () {
        this.value = this.value.replace(/\s+/g, '');
    });

    // Format Card Expiration Input
    const modernDateInput = document.querySelector(".modern-input.date");
    if (modernDateInput) {
        modernDateInput.addEventListener('input', function (event) {
            let inputValue = event.target.value.replace(/\D/g, ''); // Remove non-numeric characters
            if (inputValue.length > 2) {
                inputValue = inputValue.substring(0, 2) + '/' + inputValue.substring(2);
            }
            event.target.value = inputValue;
        });
    }

    // Restrict CVC input to no more than 3 characters
    const modernCVCInput = document.getElementById("cvc");
    if (modernCVCInput) {
        modernCVCInput.addEventListener('input', function (event) {
            if (event.target.value.length > 3) {
                event.target.value = event.target.value.slice(0, 3);
            }
        });
    }
});
