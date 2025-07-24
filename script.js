window.addEventListener("scroll", function () {
    let scrollTop = window.scrollY;
    let docHeight = document.documentElement.scrollHeight - window.innerHeight;
    let scrollPercent = (scrollTop / docHeight) * 100;
    document.getElementById("srp-bar").style.width = scrollPercent + "%";
});
