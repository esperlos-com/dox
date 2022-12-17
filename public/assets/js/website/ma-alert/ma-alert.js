class MaAlert{




    static #createElement(){


        let alertBody = document.createElement('div');
        alertBody.id = 'ma-alert';
        alertBody.classList.add(...['alert','show-anim']);


        return alertBody;
    }

    static show(options = {type:'success'},text=''){

        let body = document.querySelector('body');

        let alertBody = this.#createElement();

        alertBody.innerHTML = `<p>`+text+`</p>`

        if(options.type == 'success'){
            alertBody.classList.add('success')
        } else if(options.type == 'error'){
            alertBody.classList.add('error')
        }
        body.appendChild(alertBody)

        setTimeout(function(){

            alertBody.classList.remove('show-anim');
            alertBody.classList.add('hide-anim');

            setTimeout(function(){

                body.removeChild(alertBody)

            },1000)

        },3000)

    }

}




