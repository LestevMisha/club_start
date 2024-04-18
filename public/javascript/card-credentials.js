document.addEventListener("DOMContentLoaded", function () {

    // Remove spaces from Card Number Input
    $("#card_number").on("input", function (event) {
        this.value = this.value.replace(/\D/g, '');
    });
});
