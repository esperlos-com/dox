'use strict';

/* elements */
var aside = document.querySelector('aside');
var btnMenu = document.querySelector('#header .menu');


/* media queries*/

var initialQuery = window.matchMedia('screen and (max-width:1080px').matches;
check1080(initialQuery)
window.matchMedia("screen and (max-width:1080px)").addEventListener('change', function() {

    let  matched = this.matches;
    check1080(matched)

});


function check1080(matched){
    if(matched){
        aside.classList.add('hide');
    } else{
        aside.classList.remove('hide');
    }
}





/* events */

btnMenu.addEventListener('click',function (){
    aside.classList.toggle('hide');
})
