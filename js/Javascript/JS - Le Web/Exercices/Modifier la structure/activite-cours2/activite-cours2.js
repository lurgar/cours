
// ====== ACTIVITÉ COURS 2 =====

// GROUPE DE 3 OU 2

// Faites des recherches sur les sujet ci-dessous:
// Avec Javascript,
// 1 - Créer un nouvel élément HTML
// 2 - Ajoutez un nouvel élément créer dans la DOM
// 3 - Ajoutez un contenu HTML dans la DOM
// 4 - Ajoutez une classe dans un élément
// 5 - Modifier le CSS d'un élément

// Puis réaliser les tâches suivantes sur le HTML du fichier activite-cours2.html


// 1 - Créez un nouvel élément de type paragraphe 
    
let newP= document.createElement('p');


// 2 - Ajoutez votre nouvel élément dans l'élément ayant pour id "main"
let para = document.getElementById("main");
para.appendChild(newP);
    



// 3 - Ajoutez ce contenu HTML dans l'élément que vous créé lors de la première tâche: Mon <strong>grand</strong> contenu
newP.innerHTML ="Mon <strong>grand</strong> contenu";
    


// 4 - Ajoutez la classe important à l'élément que vous avez crée lors de la première tâche
newP.classList.add("important");
//newP.className= 'important';
 


// 5 - Votre élément est maintenant rouge, mais on voudrait qu'il soit vert. 
//     Modifiez les styles de votre élément (en JavaScript) pour qu'il soit vert.
    
newP.style.color="green";



   // document.createElement()  // prend en paramètre le nom de la balise de notre élément et nous renvoie l'élément nouvellement créé.






