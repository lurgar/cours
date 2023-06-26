'use strict'//Mode strict du 35
//1- Variable

// Recherche du bouton dans l'arbre DOM = Document Object Model 
var bouton =document.getElementById('toggle-rectangle');

//recherche de rectangle dans l'ordre DOM 
var rectangle = document.querySelector('.rectangle');

// 2-Fonctions
//1--Fonctions au click sur le bouton

function surclickButton(){
    rectangle.classList.toggle('hide')
}
