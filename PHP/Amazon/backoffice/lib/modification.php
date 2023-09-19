<?php

//La méthode GET peut servir pour le formulaire de mise à jour
//Etape par étape : Comment travailler avec un formulaire en PHP ->
//Avoir un formulaire en html
 //  - la méthode "POST" ( method='POST' | $_POST )
//- l'attribut 'name' dans chaque champ du formulaire ( <input type='text' name='firstname' )
//- Si on travail avec un fichier à upload rajouter l'attribut 'enctype' ( enctype='multipart/form-data | $_FILES )
//Avoir un fichier PHP (form_traitment.php)
//  - de récuperer le fichier form_traitment.php depuis la page du formulaire ( require_once('form_traitment.php') )
//- vérifier SI le formulaire a bien été soumis => ( !empty( $_POST ) )
//- vérifier SI chaque champ est bien remplis
//- procéder au traitement du formulaire ( envoyer les données sur un fichier OU une base de donnée )





?>