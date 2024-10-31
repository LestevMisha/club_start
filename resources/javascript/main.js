console.log("✅ Developed by Ebenezer Team.");

// keep scroll position when reloaded
window.onbeforeunload = function (e) {
    localStorage.setItem('scrollpos', window.scrollY);
};

document.addEventListener("DOMContentLoaded", function (event) {
    var scrollpos = localStorage.getItem('scrollpos');
    if (scrollpos) window.scrollTo(0, scrollpos);
});