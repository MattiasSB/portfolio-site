const menuUnderscore = document.querySelector(".menu__underscore");
const menuItems = document.querySelector(".menu__items");
const menuColor = document.querySelector(".menu__color");
const menuHeight = document.querySelector(".menu__height");
const menuLogo = document.querySelector(".menu__logo");
const allMenuItems = document.querySelectorAll(".menu__items--item");
const body = document.querySelector("body");
const xLineTop = document.getElementById("line__top");
const xLineBottom = document.getElementById("line__bottom");

let screenWidth = window.innerWidth;
let menuIsOpen = false;
        

window.addEventListener("scroll", () =>{
    if(window.scrollY > 48 && screenWidth > 940){
        xLineBottom.style.visibility = "visible";
        menuUnderscore.style.right = "1.875em";
        allMenuItems.forEach(item =>{
            item.style.visibility = "hidden"
        })
    }
    else if(window.scrollY < 48 && screenWidth > 940){
        xLineBottom.style.visibility = "hidden";
        menuUnderscore.style.right = "14.1em";
        allMenuItems.forEach(item =>{
            item.style.visibility = "visible";
        })
    }
})

/*--------------------------- Resize Proofing  ----------------------------- */

window.addEventListener("resize", () => {
    screenWidth = window.innerWidth;
    if(screenWidth > 940){
        closeMenuMobile();
        xLineBottom.style.visibility = "hidden";
        menuUnderscore.style.right = "14.1em";
        allMenuItems.forEach(item =>{
            item.style.visibility = "visible";
        })
    }
    else if (screenWidth < 940){
        menuUnderscore.style.right = "1.875em";
        xLineBottom.style.visibility = "visible";
        allMenuItems.forEach(item =>{
            item.style.visibility = "hidden"
        })
    }
});
/*--------------------------- Mobile Menu  ----------------------------- */
function closeMenuMobile() {
    if (menuIsOpen === true){
        menuIsOpen = false;
        allMenuItems.forEach(item =>{
            item.classList.add("inline__block");
            item.classList.remove("menu__open--item");
            item.style.visibility = "hidden";
        })
        menuItems.classList.add("menu__items");
        menuColor.style.background = "none";
        menuColor.classList.add("blend__difference");
        menuHeight.style.height = "5.5em";
        menuLogo.classList.remove("menu__open--logo");
        menuHeight.classList.add("justify__between");
        menuHeight.classList.remove("justify__center");
        body.style.overflow = "visible";
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
        allMenuItems.forEach(item =>{
            item.classList.remove("inline__block");
            item.classList.add("menu__open--item");
            item.style.visibility = "visible";
        })
        menuIsOpen = true;
        menuItems.classList.remove("menu__items");
        menuColor.style.background = "var(--black)";
        menuColor.classList.remove("blend__difference");
        menuHeight.style.height = "100vh";
        menuLogo.classList.add("menu__open--logo");
        menuHeight.classList.remove("justify__between");
        menuHeight.classList.add("justify__center");
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
});