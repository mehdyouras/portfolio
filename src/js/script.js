const openNav = function(oEvent) {
    oEvent.preventDefault();
    let $nav = document.querySelector(".nav");
    $nav.style.transform = "translatex(0)";
    document.addEventListener("click", function(oEvent) {
        if(oEvent.pageX > $nav.offsetWidth) {
            closeNav(oEvent);
        }
    });
    document.onkeydown = function(evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            closeNav(evt);
        }
    };
}
const closeNav = function(oEvent) {
    oEvent.preventDefault();
    document.querySelector(".nav").style.transform = "translatex(-290px)";
}

const fPageIsLoaded = function() {
    document.querySelector(".hamburger").addEventListener("click", openNav);
}

window.addEventListener("load", fPageIsLoaded);