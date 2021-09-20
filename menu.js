let show = true; 

const menuSection = document.querySelector(".menu-section")
const menuToggle = menuSection.querySelector(".menu-toggle")
const menuMobile = menuSection.querySelector(".menu-toggle")

menuSection.addEventListener("click", () => {

    menuSection.classList.toggle("on", show)
    show = !show;
})


