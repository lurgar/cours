// commentaire sur une ligne 

/*
    Ici, je fait un commentaire sur plusieurs lignes

*/

// -- 1 : Déclarer une variable en JS

// var Prenom;

// -- 2 : Affecter une valeur à une variable

// Prenom="Mila";
// var Prenom="Mila";

// -- 3 : une instruction se termine TOUJOURS par un point-virgule, aussi il est possible d'écrire plusieurs instructions sur une seule ligne
// instr_1;
// inst_2; instr_3;

// -- 4 : Afficher une boîte de dialogue (2 façons)
// alert("Super,tu est arrivé sur mon site !");
// window.alert("Super,tu est arrivé sur mon site !");

// -- 5 : Afficher dans la console (ici, la valeur de ma variable Prenom)
// console.log(Prenom);

// -- 6 : Afficher dans la page web
// document.write("A la pause bachir il dort");

// -- 7 : Demander à l'utilisateur une valeur (2 façons)
// window.prompt("Question: on est quelle jour?" , "jour de la semaine");
// prompt("Question: on est quelle jour?" , "jour de la semaine");

// -- et pour manipuler cette valeur, je n'oublie pas de la stoker
// var jour=prompt("Question: on est quelle jour?" , "jour de la semaine");
// console.log(jour);

// -- 8 : Attention /!\ le JS est sensible à la casse ('case sensitive')
// mavariable =/= maVariable =/= ma_variable
//                camel case     snake case

// -- 9 : Une variable ne peut pas commencer par un chiffre, ne doit contenir que des caractères alphanumériques, et ne peut pas être un mot réservé(var,for .... des éléments natifs du langages JS) 

//  10 : Une variable peut être déclarée de facon explicite : 

// façon explicite
// var fruit;
// fruit = "fraise";

// ou implicite :
//  var fruit_2 = "poir";

/* 
~~~~~~~~~~~  LES TYPES DE VARIABLES   ~~~~~~~~~~~~
*/

// 1. Chaîne de caractères (string)
var vacances = "2023";
var destination = "Australie";
// console.log(vacances,destination);
// 2. Un nombre entier (integer ou int)

var annee = 2023;
// console.log(annee);

// 3. Un nombre décimal (float)
var nombre_a_virgule = -5.32;
// console.log(nombre_a_virgule);

var vacances = "2020";
// console.log(vacances);
// 4. Un booléen (boolean = VRAI/FAUX = TRUE/FALSE)
var unBooleen = false; 

// -- 5. Les Constantes

/* 
     La déclaration const permet de créer une constante accessible uniquement en lecture.
     Contrairement à une variable sa valeur ne peut plus être modifiée par reaffectation plus bas dans le code
     Une constante ne peut pas être déclarée à nouveau dans le même script
*/

// -- Par convention les constantes son en majuscule

const PAYS ="France"; // string
const AN ="2020";//string
const BIRTH =2020;// nombre / int / integer

// -- 6. typeof permet de connaître le type de ma variable

// console.log(vacances);
console.log(typeof vacances);
console.log(typeof annee);

// En JS les variables sont auto-typées
// On peut convertir une variable de type NUMBER en STRING et aussi STRING en NUMBER avec les fonctions natives de JS
//  la fonction parseInt() renvoie un entier à partir d'une chaine de caractères

var unChiffre = "12";
console.log(unChiffre);
console.log(typeof unChiffre);

// STRING => NUMBER

unChiffre = parseInt(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

//je réafte une valeur
unChiffre="12.22"
console.log(unChiffre);
console.log(typeof unChiffre);

// STRING => FLOAT
unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// NUMBER => STRING
var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres)


var nb_en_lettres= nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres)
