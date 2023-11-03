const $=(selector)=>document.querySelector(selector);

const addEvt=(selector, type, callback)=>{
    $(selector).addEventListener(type, callback);
};

const keyPressFunction=function(event) {
    $('#saisie').innerHTML=event.target.value;
};

document.addEventListener('DOMContentLoaded', function() {
    addEvt('#nom', 'keyup', keyPressFunction);
});
