
// ====== ACTIVITÉ COURS 3 =====

/* GROUPE DE 3 OU 2

Faites des recherches sur les sujet ci-dessous:
Avec Javascript,
1 - Ecouter un évènement
2 - La propagation des évènements 
3 - Comment stopper la propagation des évènement
4 - Modifier le comportement par défaut d'un élément

Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours3.html


/* 
Partie 1
Commençez par écouter les événements click depuis l'élément #parent. 
Puis affichez le nombre de clics dans l'élément #parent-count.
*/

// parentArticle.addEventListener("click", function() { // 
//     alert("Parent"); 
// });

let articleElt= document.getElementById("parent");
let compteurClic = 0;

parent.addEventListener("click", function() { // 
  compteurClic++; 
 document.getElementById("parent-count").textContent = compteurClic;
 })
/* 
Partie 2
Faite la même chose mais avec l'élément #child. 
Il faudra afficher le nombre de clics sur cet élément dans l'élément #child-count.
*/
let articleElt= document.getElementById("parent");
let compteurClic = 0;

articleElt.addEventListener("click", function() { // 
  compteurClic++; 
 document.getElementById("parent-count").textContent = compteurClic;
 })

/*
Partie 3
Nous souhaitons maintenant que lorsque nous cliquons sur l'élément #child, seul le compteur de l'enfant se mette à jour.
N'oubliez pas que l'élément enfant se trouve à l'intérieur de l'élément parent
*/
let articleElt= document.getElementById("parent");
let compteurClic = 0;

articleElt.addEventListener("click", function() { // 
  compteurClic++; 
 document.stopPropagation("parent-count").textContent = compteurClic;
 })

let articleElt= document.getElementById("child");
let compteurClic = 0;

articleElt.addEventListener("click", function() { // 
  compteurClic++; 
 document.getElementById("child-count").textContent = compteurClic;
 })

/*
Partie 4
On veut éviter qu'un clic sur le lien ne nous fasse changer de page. 
Supprimons donc ce comportement par défaut. 
*/
const Papa = document.getElementById('link');    // On récupère l'élément sur lequel on veut détecter le clic
Papa.addEventListener('click', function (event) {   // On écoute l'événement click, notre callback prend un paramètre que nous avons appelé event ici
    event.preventDefault();                       // On utilise la fonction preventDefault de notre objet event pour empêcher le comportement par défaut de cet élément lors du clic de la souris
});
