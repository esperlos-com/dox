

let nav = document.getElementById('nav');

let menuContainer = nav.querySelector('.menu-items-container');
let onScreen = nav.querySelector('.menu-items-container .on-screen');
let hamburgerMenu = nav.querySelector('#hamburgerMenu');





let style = getComputedStyle(document.body)
let lgBreakpoint = style.getPropertyValue('--lg-breakpoint').replace('px','');



window.addEventListener("resize", function (e) {

    if (e.target.innerWidth > lgBreakpoint) {
        if(menuContainer.classList.contains("show")){
            menuContainer.classList.remove("show");
        }else if (menuContainer.classList.contains("hide")){
            menuContainer.classList.remove("hide");
        }

    }
});


onScreen.addEventListener('click', function (e) {

    if (menuContainer.classList.contains('show')) {
        menuContainer.classList.replace("show", "hide");

    }
});




hamburgerMenu.addEventListener('click', () => {
    toggle()
})


function toggle() {


    if (menuContainer.classList.contains('show')) {
        menuContainer.classList.replace("show", "hide");


    } else if (menuContainer.classList.contains('hide')) {
        menuContainer.classList.replace("hide", "show");
    }


    if (!menuContainer.classList.contains('show') && !menuContainer.classList.contains('hide')) {
        menuContainer.classList.add("show");

    }


}