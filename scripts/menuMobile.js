
const menuUnderscore = document.querySelector(".underlines");
const body = document.querySelector("body");
const xLineTop = document.getElementById("line__top");
const xLineBottom = document.getElementById("line__bottom");
const menu = document.querySelector(".menu");
const menuActiveTarget = document.querySelector(".menu__active--target");

let screenWidth = window.innerWidth;
let menuIsOpen = false;
let scrollPosition = window.scrollY;


window.addEventListener("scroll", ()=>{
    scrollPosition = window.scrollY;
    if(window.scrollY > 48 && screenWidth > 940){
        menuActiveTarget.classList.add("menu__scroll");
    }
    else if(window.scrollY < 48 && screenWidth > 940){
        menuActiveTarget.classList.remove("menu__scroll");
    }

})
/*--------------------------- Resize Proofing  ----------------------------- */

window.addEventListener("resize", () => {
    screenWidth = window.innerWidth;
    if(screenWidth > 940){
        closeMenuMobile();
    }
});
/*--------------------------- Mobile Menu  ----------------------------- */
function closeMenuMobile() {
    if (menuIsOpen === true){
        menuIsOpen = false;
        body.style.overflow = "visible";
        menuActiveTarget.classList.remove("menu__active");
        //removes x animation
        xLineTop.classList.remove("menu__underscore--animation--x");
        xLineBottom.classList.remove("menu__underscore--animation--rx");
        //turns to hamburger
        xLineTop.classList.add("reverse__menu__underscore--animation--x");
        xLineBottom.classList.add("reverse__menu__underscore--animation--rx");
        //creates pop out menu
    }
}

function openMenuMobile() {
    if (menuIsOpen == false){
        menuIsOpen = true;
        menuActiveTarget.classList.add("menu__active");
        body.style.overflow = "hidden";
        //removes hamburger styling animation
        xLineTop.classList.remove("reverse__menu__underscore--animation--x");
        xLineBottom.classList.remove("reverse__menu__underscore--animation--rx");
        //creates x 
        xLineTop.classList.add("menu__underscore--animation--x");
        xLineBottom.classList.add("menu__underscore--animation--rx");
        //creates pop out menu
    }
};

menuUnderscore.addEventListener("click", () => {
    if (menuIsOpen == false && screenWidth < 940) {
        openMenuMobile();
    }
    else if (menuIsOpen == true && screenWidth < 940){
        closeMenuMobile();
    }
    else if (menuIsOpen == false && screenWidth > 940 && scrollPosition > 48) {
        openMenuMobile();
    }
    else if (menuIsOpen == true && screenWidth > 940 && scrollPosition > 48){
        closeMenuMobile();
    }
});