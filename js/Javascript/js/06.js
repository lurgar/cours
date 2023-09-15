// L'opérateur de comparaison == signifie 'égal à'
var nb1 = 123;
var nb2 = "123";

console.log(nb1 == nb2); // returne TRUE

// L'opérateur de comparaison === signifie 'strictement égal à'
// il permet de vérifier la VALEUR et le TYPE

console.log(nb1 === nb2);// returne FALSE

// L'opérateur != signifie ' différent de ... en VALEUR '

console.log(nb1 != nb2);// returne FALSE

// Lopérateur !== signifie ' strictement différent de ... en TYPE et eb VALEUR '

console.log(nb1 !== nb2);//returne TRUE

// EXERCICE
// J'arrive sur un Espace Sécurisé au moyen du prénom et de l'âge.
// Je doit saisir mon prénom et mon age pour être authentifié sur le site.
// En cas d'échec une alerte m'informe du problème.
// Si tout se passe bien, un message de bienvenue m'accueille.

var prenom, monAge;
prenom = "Ahmed";
monAge = 27;

// 1-- Demnader son prénom à l'utilisateur avec un prompt 
var prenomLogin = prompt('Quel est votre prénom');
// 2-- Je vérifie si le prenom saisi(prenomLogin) correspond à (prenom)
if (prenom === prenomLogin){
    // 2.1 Si tout est ok, je continue la vérification avec l'âge
   var ageLogin = parseInt(prompt("Votre âge ?"));// 2.2 Demande a l'utilisateur son âge via un PROMPT
        if ( ageLogin === monAge ){
    alert("Bienvenue " + prenomLogin);
        }else{
// 2.3 Si les ages ne correondent pas, je lance une ALERT
    alert("Erreur d'âge");
        }

} else{
    // 2.4 Sinon, les prénoms ne correspondent pas, je lance une ALERT
    alert("Attention, prénom non reconnu");
}

