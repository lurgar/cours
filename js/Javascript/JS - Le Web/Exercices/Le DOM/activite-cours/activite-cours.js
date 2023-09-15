// ====== ACTIVITÉ COURS =====


// 1 - Récupérez l'élément ayant pour ID main-content grâce à son ID.

 document.getElementById('main-content');

// 2 - Récupérez les éléments ayant pour classe important

 document.getElementsByClassName('important');

// 3 - Récupérez les éléments de type article

 document.getElementsByTagName('article');

// 4 Récupérez les éléments de type li qui sont dans un paragraphe (p) ayant la classe important. 
// Les paragraphes doivent eux-même être dans un article (article).

 let element4 = document.querySelect
 

// 5 - En reprenant le résultat de la tâche précédente (les éléments de type li dans un paragraphe 
// avec la classe important ....), sélectionnez le premier élément de type li 
// (rappelez-vous qu'avec querySelector vous avez récupéré une liste). 
// Puis dépuis cet élément, récupérez l'élément suivant (Celui qui a comme contenu Elément 2)
document.querySelector('li')
document.querySelectorAll('article>p>li')[1];