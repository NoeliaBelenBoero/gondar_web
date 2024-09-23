let hamburger = document.querySelector(".menu__hidden");
hamburger.onclick = function() {
    navBar = document.querySelector(".menu");
    navBar.classList.toggle("active");
}