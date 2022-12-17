const { execSync } = require('child_process');


const name = process.argv.slice(2)[2];
const type = process.argv.slice(2)[3];


let rootRouteName = name.split('/')[1];
let routeName = "";
console.log(routeName)

var sL = rootRouteName.length;
var i = 0;
let upperIndex = 0;

for (; i < sL; i++) {
    if (rootRouteName.charAt(i) === rootRouteName.charAt(i).toUpperCase()) {



        routeName += (rootRouteName.substring(upperIndex,i)+'-').toLowerCase();
        //console.log('uppercase:',routeName.substring(upperIndex,i));
        upperIndex = i;
    }
}

routeName = routeName.replace(/^(-)+/, '')+"management";





let dir = "";

if(type == "p"){
    dir = "Panel/Pages/";
}

if(type == "pc"){
    dir = "Panel/Components/";
}

let fullName = dir+name;



const output = execSync('php artisan livewire:make '+fullName, { encoding: 'utf-8' });
console.log(output);
console.log("route: "+"    Route::get('"+routeName+"', "+name+"::class)->name('"+routeName+"');");
console.log("dont forget add to menu");
