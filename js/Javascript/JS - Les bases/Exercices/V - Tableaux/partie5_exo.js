// [ source: https://github.com/oc-courses/intro-javascript ]


/*
* EXERCICE 1 - les tableaux
* Complétez le programme pour calculer puis afficher la somme des valeurs du tableau nombres.
*/
//code
let numbers = [11, 3, 7, 2, 9, 10];

let somme = 0;

for (let i = 0; i < numbers.length; i++) {
  somme += numbers[i];
}

console.log("La somme des valeurs du tableau nombres est : " + somme);
/*
* EXERCICE 2 - les tableaux
* Complétez le programme pour qu'il calcule et affiche ensuite la plus grande valeur présente dans le tableau.
*/


//for
// let valeurs = [3, 11, 7, 2, 9, 10];

// let plusGrandeValeur = valeurs[0];

// for (let i = 1; i < valeurs.length; i++) {
//   if (valeurs[i] > plusGrandeValeur) {
//     plusGrandeValeur = valeurs[i];
//   }
// }

// console.log("La plus grande valeur est: " + plusGrandeValeur);

//foreach
let valeurs = [3, 11, 7, 2, 9, 10];
let max = valeurs[0];
valeurs.forEach(function(valeur){
  if (valeur > max) {
    max =valeur;
  }
})
console.log(max);

/*
* EXERCICE 3 - les tableaux
* Ecrivez un programme qui crée un tableau contenant les noms des trois mousquetaires, Athos, Porthos et Aramis ;
* 1- Affiche le nom de chaque mousquetaire à l'aide d'une boucle for ;
* 2- Ajoute au tableau le mousquetaire d'Artagnan ;
* 3- Affiche de nouveau le nom de chaque mousquetaire, cette fois à l'aide de la méthode forEach().
*/

// code 
let musketeers = ["Athos", "Porthos", "Aramis"];
for (let i = 0; i < musketeers.length; i++) {
  console.log(musketeers[i]);
}
musketeers.push("d'Artagnan");

musketeers.forEach(musketeers => console.log(musketeers));


/*
* EXERCICE 4 - les tableaux
* Ecrivez un programme qui fait saisir à l'utilisateur des mots jusqu'à ce qu'il saisisse "stop".
* Le programme affiche alors la liste des mots saisis.
*/

// code 

var mots = [];

while (true) {
  let mot = prompt("Entrez un mot : ");
  if (mot === "stop") {
    break;
  }
  mots.push(mot);
}

console.log("Les mots saisis sont : " + mots);




