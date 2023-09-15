/* 
* Exo 1: Ecrivez un programme qui affiche votre nom, puis votre âge.
*/

// Déclaration des variables
let nom = prompt("Quel est votre nom ?");
let prenom = prompt("Quel est votre prénom ?");
// Affichage du nom et du prénom dans une fenêtre d'alerte
alert("Bienvenue, " + nom + " " + prenom);

let age = prompt("Entrez votre age:");
alert("votre age est de  " + age +'ans' )


/* 
* Exo 2: 
* Ecrivez un programme qui calcule et affiche le résultat de l'addition, 
* de la soustraction, de la multiplication et de la division de 9 par 3.
*/

// 9 + 3
// Déclaration des variables
var a = 9;
var b = 3;

// Addition des variables
var c = a + b;

// Affichage du résultat
console.log(c); // 12

// 9-3
let a = 9;
let b = 3;

// Addition des variables
let c = a - b;

// Affichage du résultat
console.log(c);//6

//9*3

let a = 9;
let b = 3;

let c = a * b;

console.log(c);//27

// 9-3
let a = 9;
let b = 3;

// Addition des variables
let c = a / b;

// Affichage du résultat
console.log(c);//3



/* 
* Exo 3: 
* Observez le programme puis tentez de prévoir les valeurs affichées lors de son exécution.
* Vérifiez vos prévisions en l'exécutant.
*/

console.log(4 + 5);//9
//permet de faire une addition 
console.log("4 + 5");//4 + 5 type string (chaine de caractére)
console.log("4" + "5");//45 (concaténation)


/* 
* Exo 4: 
* Observez le programme et tentez de prévoir les valeurs finales de chaque variable.
* Vérifiez vos prévisions en l'exécutant.
*/

var a = 2;
a -= 1;//2
a++;
var b = 8;
b += 2;//10
var c = a + b * b;//102
var d = a * b + b;//30
var e = a * (b + b);//40
var f = a * b / a;//40
var g = b / a * a;//10
console.log(a, b, c, d, e, f, g);//10


/* 
* Exo 5: 
* Complétez le programme pour convertir une tempéraure des degrés Celsius en degrés Fahrenheit.

/* C'est à Daniel Gabriel Fahrenheit que l'on doit l'invention des thermomètres 
en graduation Fahrenheit. Au début, ses thermomètres sont à l'alcool (1709), 
mais il remplace rapidement l'alcool par du mercure (1715), permettant à ses 
outils de mesure de fournir des données comparables. En 1742, un autre 
scientifique, Anders Celsius, propose une nouvelle graduation au thermomètre. 
La conversion entre les échelles est donnée par [°F] = [°C] x 9/5 + 32. 
*/

var tempCel = 37.1;

// Ajoutez ici le code pour convertir tempCel en degrés Fahrenheit
// Déclaration de la variable
//var tempCel = prompt("Quelle est la température en degrés Celsius ? ");

// Conversion des degrés Celsius en degrés Fahrenheit
var tempFah = (9/5) * tempCel + 32;

// Affichage du résultat
console.log("La température en degrés Fahrenheit est " + tempFah);


/* 
* Exo 6: 
* Complétez le programme afin qu'il permute les valeurs des deux variables.
* Il existe plusieurs solutions à cet exercice. 
* Astuce : vous n'êtes pas limité(e) à l'utilisation de deux variables.
*/

let nombre1 = 5;
let nombre2 = 3;

// Permute les valeurs des variables
let temp = nombre1;
nombre1 = nombre2;
nombre2 = temp;


// Tapez votre code ici (sans rien modifier d'autre !)

console.log(nombre1); // Doit afficher 3
console.log(nombre2); // Doit afficher 5


