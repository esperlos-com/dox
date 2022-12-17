
/*
* @property type : string
* @property label : string
* @property (optional) initial : string
* @property (optional) classes : []
* @property default : [value,text]
* @property options : [value,text]
* @property (optional) datasets : []
* */
export let select = function(data){

    let element = document.createElement('select');






    let resource = data.default;

    for (let i = -1; i <data.options.length ; i++) {

        if(i !== -1){
            resource = data.options[i];
        }

        let optionElement = document.createElement('option');
        optionElement.textContent = resource.text;
        optionElement.value = resource.value;
        element.appendChild(optionElement);


        if(data.hasOwnProperty('initial')){
            if(data.initial == optionElement.value)
                optionElement.setAttribute('selected',true);
        }

    }



    if(data.hasOwnProperty('datasets')){
        for (let i = 0; i <data.datasets.length; i++) {
            element.setAttribute('data-'+data.datasets[i].data, data.datasets[i].value);
        }
    }


    if(data.hasOwnProperty('classes') && data.classes.length>0){
        element.classList.add(...data.classes);
    }




    return element;
}
