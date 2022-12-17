import {formModules} from "../res/form-modules.js";

import {select} from "../modules/select.js";
import {input} from "../modules/input.js";
import {formType} from "../constants/form-type.js";

export class Form{


    static rowBuilder(wrapper,initials = {}){


        let rowElement = document.createElement('div');
        rowElement.classList.add('form-row');


        console.log(initials);
        formModules.forEach(function(item,index){

            let module;

            // setup initial
            if(Object.values(initials).length>0){
                item['initial'] = Object.values(initials)[index];
            }else{
                delete  item['initial'];
            }


            // create elements
            if(item.type === formType.SELECT){

                module = select(item);
            }
            else if(item.type === formType.INPUT){
                module = input(item);
            }


            // container
            let container = document.createElement("div");
            container.classList.add(...['mb-2','col-md-2']);

            let randomInt = Math.floor(Math.random() * 100);
            let id = "input"+randomInt;
            module.id = id;


            if(item.hasOwnProperty('label')){
                let label = document.createElement('label');
                label.for = id;
                label.innerText = item['label'];
                container.appendChild(label);
            }

            container.appendChild(module);


            // row
            rowElement.appendChild(container)


        });


        // delete button
        let container = document.createElement("div");
        container.classList.add(...['d-flex','align-items-end','mb-2']);

        let deleteElement = document.createElement('button');
        deleteElement.textContent = "حذف";
        deleteElement.classList.add('btn', 'btn-danger');
        deleteElement.addEventListener('click',function(){
            container.parentElement.remove()
        });

        container.appendChild(deleteElement);


        rowElement.appendChild(container)


        wrapper.appendChild(rowElement);

    }



}
