'use strict'
{
    const open = document.getElementById('open');
    const hiddenmenu = document.getElementById('hiddenmenu');
    const close = document.getElementById('close');

    open.addEventListener('click',() =>{
        hiddenmenu.classList.add('display');
        close.classList.add('display');
        open.classList.add('hidden');
    });
    close.addEventListener('click',() =>{
        hiddenmenu.classList.remove('display');
        close.classList.remove('display');
        open.classList.remove('hidden');
    });
}