
/*
* @property type : string
* @property hint : string
* @property label : string
* @property (optional) classes : []
* @property (optional) initial : string
* */
export let input = function(data){



    let container = document.createElement("div");


    let element = document.createElement('input');
    element.placeholder = data.hint;

    if(data.hasOwnProperty('initial')){
        element.value = data.initial;
    }
    if(data.hasOwnProperty('classes') && data.classes.length>0){
        element.classList.add(...data.classes);
    }



    if(data.hasOwnProperty('datasets')){
        for (let i = 0; i <data.datasets.length; i++) {
            element.setAttribute('data-'+data.datasets[i].data, data.datasets[i].value);
        }
    }



    return element;
}


