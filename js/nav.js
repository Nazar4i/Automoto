(function () {

    var navButton = document.getElementById("nav-menu-button"),
        navUl = document.getElementsByClassName("nav-menu");

    function toggleMobileMenu() {
        navUl[0].style.transition = "max-height 0.5s";
        navUl[0].classList.toggle("hide-ul");
    }

    navButton.onclick = toggleMobileMenu;
}());