let nav = document.getElementById('nav');

let collapses = nav.querySelectorAll('.menu-items-container .sub-menu');

let main = document.getElementsByTagName('main')[0];


main.addEventListener('click',function(){
    collapses.forEach(function (item){
        item.classList.remove('expanded');
        let ul = item.nextElementSibling;
        ul.style.display = 'none';
    });
});



collapses.forEach(function (item,index){

    item.addEventListener('click',function (e){

        collapses.forEach(function (item,index2){
            if(index !== index2){
                item.classList.remove('expanded');
            }

        });


        let ul = item.nextElementSibling;

        if(item.classList.contains('expanded')){

            let style = getComputedStyle(document.body)
            let animationTime = style.getPropertyValue('--menu-expand-time').replace('ms','');

            setTimeout(function(){
                ul.style.display = 'none';
            },animationTime)

            item.classList.remove('expanded');
        }else{
            ul.style.display = 'block';
            item.classList.add('expanded');
        }



    });
});
