const $=(selector)=>document.querySelector(selector);

const addEvt=(selector, type, callback)=>{
    const elm=$(selector);
    if(elm){
        elm.addEventListener(type, callback);
    }
};

document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner le bouton et ajouter un gestionnaire d'événements au clic
    var colorButton = document.getElementById('colorButton');
    colorButton.addEventListener('click', changeColor);

    // Fonction pour changer la couleur du fond de la page
    function changeColor() {
        // Générer une couleur aléatoire au format hexadécimal
        var randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
        
        // Appliquer la nouvelle couleur au fond de la page
        document.body.style.backgroundColor = randomColor;
    }
});
