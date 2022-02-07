'use strict'

let cBtn = document.getElementById('culbtn');
let r1 = document.getElementById('radio1');
let r2 = document.getElementById('radio2');
let pArr = [0,0,0];
let tArr = [];
let item1 = document.getElementById('item1');
let item2 = document.getElementById('item2');
let item3 = document.getElementById('item3');
let sel = document.getElementById('sel');
let ul = document.getElementById('ul');
let te = document.getElementById('te');

let q1 = document.getElementById('q1');
let q2 = document.getElementById('q2');
let qBtn = document.getElementById('qbtn');

let table = document.getElementById('table');


cBtn.addEventListener('click',()=>{
    if(radio1.checked){
        pArr[0] = pArr[0]+1;
        pArr[1] = pArr[1]+1;
        tArr.push('エストロゲンの減少');
    } else if (radio2.checked){
        pArr[1] = pArr[1]+2;
        pArr[2] = pArr[2]+2;
        tArr.push('筋肉量不足');
    }
    if(sel.value == 1){
        pArr[0] = pArr[0]+1;
        tArr.push('血行不良');
    } else if (sel.value == 2){
        pArr[1] = pArr[1]+2;
        tArr.push('姿勢');
    } else {
        pArr[2] = pArr[2]+3;
        tArr.push('プロゲステロン増加');
    }
    item1.value = pArr[0];
    item2.value = pArr[1];
    item3.value = pArr[2];
    console.log(item1.text)
    item1.innerHTML = `${item1.value}`;
    item2.innerHTML = `${item2.value}`;
    item3.innerHTML = `${item3.value}`;

    for(let i = 0; i<tArr.length; i++){
        let li = document.createElement('li');
        li.innerHTML = `<li id="cat">${tArr[i]}</li>`
        ul.append(li);
    }

    q1.classList.add('hidden');
    q2.classList.add('hidden');
    qBtn.classList.add('hidden');
    table.classList.remove('hidden');
    ul.classList.remove('hidden');
    te.classList.remove('hidden');
});
