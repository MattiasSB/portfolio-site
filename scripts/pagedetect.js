let loadedPage = window.location.pathname;
//returns just the page name
let url = window.location.href;
//returns the full path
let lastLoadedPage = document.referrer;

if(loadedPage == "/work.php"){
    //switch classname to variable stored in string
    menuUnderscore.style.right = "7.5em";
}
else if (loadedPage == "/about.php") {
    menuUnderscore.style.right = "1.5em";
}

