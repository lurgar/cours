'use strict'

// Déclaration d'une variable

var nombre;

// La boucle do while s'éxécutera toujours au moins une fois
//  alors que la boucle while peut ne pas s'éxécuter si la condition est fausse dés le départ

// En utilisant cette boucle quand elle doit s'éxécuter au moins une fois pour que la comparaison puisse s'effectuer

do{

    nombre = parseFloat(window.prompt("Veuillez choisir un nombre"));

}while (isNaN(nombre) == true);

    document.write(' <p> Merci , vous avez saisi <strong> ' + nombre + '</strong></p>')
