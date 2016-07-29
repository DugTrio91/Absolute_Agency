//global variables
var yPos;
var height = window.innerHeight;
var scrollSpeed = 75;



//toggle menu
var iconMenu = document.getElementById("icon-menu");
var iconMenuBars = iconMenu.getElementsByTagName("span");
var menu = document.getElementById("menu");
var menuItems = menu.getElementsByTagName("li");

//intitial state
var menuOpen;

function toggleMenu() {
    //if the function hasnt been called yet
    if (menuOpen === undefined) {
        menuOpen = false;
    }

    if (menuOpen === false) {
        openMenu();
        menuOpen = true;
    } else if (menuOpen === true) {
        closeMenu();
        menuOpen = false;
    }
}

function openMenu() {

    //show menu and fade links in
    menu.style.right = 0;
    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].style.transitionDelay =
            menuItems[i].style.webkitTransitionDelay = (i + 1) / 15 + "s";
        menuItems[i].style.opacity = "1";
        menuItems[i].style.left = "0";
    }

    //change icon for aesthetics
    for (var i = 0; i < iconMenuBars.length; i++) {
        iconMenuBars[i].style.width = "30px";
        iconMenuBars[i].style.background = "#fff";
    }

    //transform icon to cross
    iconMenuBars[0].style.transform =
        iconMenuBars[0].style.WebkitTransform =
        iconMenuBars[0].style.msTransform = "rotate(45deg)";
    iconMenuBars[0].style.top = "13px";
    iconMenuBars[1].style.width = "0";
    iconMenuBars[1].style.opacity = "0";
    iconMenuBars[2].style.transform
    iconMenuBars[2].style.WebkitTransform =
        iconMenuBars[2].style.msTransform = "rotate(-45deg)";
    iconMenuBars[2].style.top = "34px";

}

function closeMenu() {

    //hide menu and links
    menu.style.right = (menu.offsetWidth * -1) + "px";
    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].style.transitionDelay =
            menuItems[i].style.webkitTransitionDelay = "0s";
        menuItems[i].style.opacity = "0";
        menuItems[i].style.left = "100px";
    }

    //change icon for aesthetics
    for (var i = 0; i < iconMenuBars.length; i++) {
        iconMenuBars[i].style.width = "23px";
        iconMenuBars[i].style.background = "#fff";
    }

    //transform icon to bars
    iconMenuBars[0].style.transform =
        iconMenuBars[0].style.WebkitTransform =
        iconMenuBars[0].style.msTransform = "rotate(0deg)";
    iconMenuBars[0].style.top = "14px";
    iconMenuBars[1].style.opacity = "1";
    iconMenuBars[2].style.transform =
        iconMenuBars[2].style.WebkitTransform =
        iconMenuBars[2].style.msTransform = "rotate(0deg)";
    iconMenuBars[2].style.top = "32px";

}

iconMenu.addEventListener("click", toggleMenu);



//have portfolio menu follow user down the page
var allowance = 100;

var casemenu = document.getElementById("case-study-menu");
var casemenuTitle = document.getElementById("case-study-menu-title");
var casemenuLinks = casemenu.getElementsByTagName("a");

var sections = [
    document.getElementById("container1"),
    document.getElementById("container2"),
    document.getElementById("container3"),
    document.getElementById("container4"),
    document.getElementById("container5"),
    document.getElementById("container6")
];

function isVisible(section) {
    if (yPos + allowance > section.offsetTop) return true;
    return false;
}

function adjustCaseMenu() {
    yPos = window.pageYOffset;

    if (yPos >= casemenu.offsetTop - allowance) {
        casemenu.style.position = "fixed";
        casemenu.style.top = "100px";
    }

    if (yPos < height - allowance) {
        casemenu.style.position = "absolute";
        casemenu.style.top = "100vh";
    }

    for (var i = 0; i < sections.length; i++) {
        if (isVisible(sections[i])) {
            casemenuTitle.innerHTML = casemenu.getElementsByTagName("a")[i].innerHTML;
            for (var j = 0; j < casemenuLinks.length; j++) {
                casemenuLinks[j].className = "";
            }
            sections[i].style.opacity = "1";
            casemenuLinks[i].className = "active";
        }
    }
}

window.addEventListener("scroll", adjustCaseMenu);



//animate scrolling to destination when chosen link is clicked
function scrollDirection(target){
    //determine whether to go up or down
    var direction = yPos > target.offsetTop ? -1 : 1;
    animateScroll(target, direction);
}

function animateScroll(target, direction){

    //recur
    var interval = window.setTimeout(function(){
        animateScroll(target, direction);
    }, 1);

    //work out if scrolling should stop
    if(direction === 1 && yPos >= target.offsetTop){
        clearTimeout(interval);
    } else if(direction === -1 && yPos <= target.offsetTop){
        clearTimeout(interval);
    } else {
        //else scroll
        window.scrollBy(0, scrollSpeed * direction);
    }

}

casemenuLinks[0].addEventListener("click", function(){ scrollDirection(sections[0]); });
casemenuLinks[1].addEventListener("click", function(){ scrollDirection(sections[1]); });
casemenuLinks[2].addEventListener("click", function(){ scrollDirection(sections[2]); });
casemenuLinks[3].addEventListener("click", function(){ scrollDirection(sections[3]); });
casemenuLinks[4].addEventListener("click", function(){ scrollDirection(sections[4]); });
casemenuLinks[5].addEventListener("click", function(){ scrollDirection(sections[5]); });

