let loadedPage = window.location.pathname;
//returns just the page name
let url = window.location.href;
//returns the full path
let lastLoadedPage = document.referrer;

window.onload = function () { 
    if(screenWidth < 940){
        menuUnderscore.style.right = "1.825em";
    }
}

function moveUnderscore(){
    console.log(loadedPage)

    if(loadedPage == "/public/work.php" && screenWidth > 940 || loadedPage == "/public/bottleshooter.php" && screenWidth > 940){
        //switch classname to variable stored in string
        menuUnderscore.style.right = "7.5em";
    }
    else if (loadedPage == "/public/about.php" && screenWidth > 940) {
        menuUnderscore.style.right = "1.5em";
    }
    else if (loadedPage == "/public/" && screenWidth > 940 || loadedPage == "/index.php" && screenWidth > 940) {
        menuUnderscore.style.right = "13.425em";
    }
    else if (screenWidth > 940) {
        menuUnderscore.style.right = "7.5em";
    }
}

window.addEventListener("resize", () => {
    if(screenWidth > 940){
        moveUnderscore();
    }
    else if(screenWidth < 940){
        menuUnderscore.style.right = "1.825em";
    }
});
window.onload = moveUnderscore();



gsap.registerPlugin(ScrollTrigger)
let GsapMM = gsap.matchMedia();
if(loadedPage == "/public/" || loadedPage == "/index.php/"){
GsapMM.add("(min-width: 940px)", () =>{
    gsap.to(
        ".home .carousel", {
        scrollTrigger: {trigger: '.scroll__marker',scrub: 1, start:"20%", end: "80%"},  
        opacity: "1", 
        ease: "ease-in-ease-out"
    }) 
    gsap.to(
        ".home .intro__container",{
        scrollTrigger: {trigger: '.scroll__marker', scrub: 1, start:"20%", end: "80%"},  
        opacity: "0", 
        ease: "ease-in-ease-out"
    }) 
    gsap.to(
        ".intro__about", {
            scrollTrigger: {trigger: '.scroll__marker', scrub: 1, start:"80%", end: "120%"},
        opacity: "1", 
        ease: "ease-in-ease-out"
    }) 


})

GsapMM.add("(max-width: 940px)", () => {
    gsap.to(
        ".home .intro__container, .home .carousel", {
        duration: "0.5",
        opacity: "1", 
        ease: "ease-in-ease-out"
    }) 
    gsap.to(
        ".intro__about", {
        scrollTrigger: {trigger: ".carousel", scrub: 1, start:"-80%", end: "20%"}, 
        opacity: "1", 
        ease: "ease-in-ease-out"
    }) 
    
})

    
}
else if (loadedPage == "/public/work.php") {
    GsapMM.add("(max-width: 940px)", () => {
        gsap.to(
            ".work__development .carousel", {
            scrollTrigger: {trigger: ".work__design", scrub: 1, start:"20%", end: "0%"}, 
            opacity: "1", 
            ease: "ease-in-ease-out"
        })
        gsap.to(
            ".work__design .carousel", {
            duration: "0.5",
            opacity: "1", 
            ease: "ease-in-ease-out"
        }) 
    })
    GsapMM.add("(min-width: 940px)", () => {
        gsap.to(
            ".work__development .carousel", {
                scrollTrigger: {trigger: '.scroll__marker', scrub: 1, start:"40%", end: "100%"}, 
            opacity: "1", 
            ease: "ease-in-ease-out"
        })
        gsap.to(
            ".work__design .carousel",{
            scrollTrigger: {trigger: '.scroll__marker', scrub: 1, start:"20%", end: "80%"}, 
            opacity: "0", 
            ease: "ease-in-ease-out"
        })
    })
}

else if (loadedPage == "/public/about.php") {
    gsap.to(
        ".banner__container, .carousel", {
        duration: "0.5",
        opacity: "1", 
        ease: "ease-in-ease-out"
    }) 
}
else{
//add projects page
}