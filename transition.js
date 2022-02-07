'use strict'

let checks = document.querySelectorAll('.checkbox');
let btn = document.getElementById('transbtn');

let a = document.getElementById('tag1');
console.log(a.value);

let arr = [];

btn.addEventListener('click',()=>{
    checks.forEach((check)=>{
        if(check.checked){
            arr.push(check.value);
            let join = arr.join('');
            console.log(join);
            location.href = `${join}.php`;
        }
    });
});
