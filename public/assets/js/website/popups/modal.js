
let buttons = document.querySelectorAll('[data-target^="#"]');

buttons.forEach(function(el){

    el.addEventListener('click',function(event){

        let modal = document.querySelector(el.dataset.target);

        let modalBody = modal.querySelector('.modal-body');

        let closeButton = modal.querySelector('.close');


        modal.classList.add('show');


        closeButton.addEventListener('click', function(event) {
            modal.classList.remove('show');
        });

        modal.addEventListener('click', function(event) {
            const outsideClick = !modalBody.contains(event.target);
            if(outsideClick){

                modal.classList.remove('show');
            }

        });



    });

});
