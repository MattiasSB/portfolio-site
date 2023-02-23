
const menuUnderscore = document.querySelector(".underlines");
const body = document.querySelector("body");
const xLineTop = document.getElementById("line__top");
const xLineBottom = document.getElementById("line__bottom");
const menu = document.querySelector(".menu");

let screenWidth = window.innerWidth;
let menuIsOpen = false;
        

window.addEventListener("scroll", () =>{
    if(window.scrollY > 48 && screenWidth > 940){
        menu.classList.add("menu__scroll");
        xLineBottom.style.visibility = "visible";
        menuUnderscore.classList.remove("underlines");
        menuUnderscore.classList.add("right");
    }
    else if(window.scrollY < 48 && screenWidth > 940){
        xLineBottom.style.visibility = "hidden";
        menu.classList.remove("menu__scroll");
        closeMenuMobile();
        menuUnderscore.classList.remove("right");
        menuUnderscore.classList.add("underlines");
    }
})

/*--------------------------- Resize Proofing  ----------------------------- */

window.addEventListener("resize", () => {
    screenWidth = window.innerWidth;
    if(screenWidth > 940 && window.scrollY < 48){
        closeMenuMobile();
        xLineBottom.style.visibility = "visible";
    }
    else if(screenWidth > 940 && window.scrollY > 48){
        closeMenuMobile();
        xLineBottom.style.visibility = "hidden";
    }
    
});
/*--------------------------- Mobile Menu  ----------------------------- */
function closeMenuMobile() {
    if (menuIsOpen === true){
        menuIsOpen = false;
        body.style.overflow = "visible";
        menu.classList.remove("menu__active");
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
        menu.classList.add("menu__active");
        body.style.overflow = "hidden";
        xLineBottom.style.visibility = "visible";
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
});