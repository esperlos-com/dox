import {Form} from './classes/form.js';


let resultJson = [];

let btnAdd = document.querySelector('#add');
let submit = document.querySelector('#submit');
let wrapper = document.querySelector('#wrapper');

document.addEventListener('livewire:load', function () {
    let jsonValues = JSON.parse(window.jsonValues);
    jsonValues.forEach(function(item){
        Form.rowBuilder(wrapper,item);
    });
})




btnAdd.addEventListener('click', function () {

    Form.rowBuilder(wrapper,{});

});

submit.addEventListener('click', function () {

    resultJson.length = 0;

    for (let i = 0; i < wrapper.children.length; i++) {


        let data = {};
        for (let j = 0; j < wrapper.children[i].children.length; j++) {

            if(wrapper.children[i].children[j].children[1] != undefined)
                data[wrapper.children[i].children[j].children[1].dataset.role] = wrapper.children[i].children[j].children[1].value;
        }


        resultJson.push(data);
    }

    console.log(resultJson);

    Livewire.emit('submit',resultJson);



});


