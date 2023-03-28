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

    if(loadedPage == "//public/work.php" && screenWidth > 940 || loadedPage == "//public/bottleshooter.php" && screenWidth > 940){
        //switch classname to variable stored in string
        menuUnderscore.style.right = "7.5em";
    }
    else if (loadedPage == "//public/about.php" && screenWidth > 940) {
        menuUnderscore.style.right = "1.5em";
    }
    else if (loadedPage == "//public/" && screenWidth > 940 || loadedPage == "/index.php" && screenWidth > 940) {
        menuUnderscore.style.right = "13.425em";
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

