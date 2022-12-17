$( document ).ready(function() {


    window.addEventListener('pop-alert', event => {


        if(event.detail.type === 'success') {
            toastr.success(event.detail.message);
        }

        if(event.detail.type === 'error') {
            toastr.error(event.detail.message);
        }

        $(".modal").modal('hide');
    })


});





$( document ).ready(function() {
    window.addEventListener('confirm', event => {
        $(".modal").modal('hide');
    })

});



class Toaster{
    static canClick = true;
    static fire(duration = 2){

        let self = this;

        if(self.canClick){
            self.canClick = false;

            let div = document.createElement('div')
            div.classList = 'toaster anim'
            div.style.animationDuration = 2+'s'
            div.textContent = 'متن کپی شد'
            document.body.appendChild(div);

            let interval = setInterval(start,duration*1000);

            function start() {
                document.body.removeChild(div);
                end();
            }

            function end() {
                self.canClick = true;
                clearInterval(interval);
            }
        }



    }
}

