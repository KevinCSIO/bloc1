const $=(selector)=>document.querySelector(selector);

const addEvt=(selector, type, callback)=>{
    const elm=$(selector);
    if(elm){
        elm.addEventListener(type, callback);
    }
};