<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message de bienvenue</title>
</head>
<body>

<?php

    if(isset($_POST['submit'])){
        $nom =$_POST['nom'];
        $prenom =$_POST['prenom'];
        if(empty($nom) || empty($prenom)){
            echo"Veuillez remplire tous les champs";
        }else{
            echo"Bienvenue, $prenom $nom !";
        }
    }

?>


<h1>Entrez votre nom et prenom :</h1>
<form method="post" action="">
    <label for="nom">Nom</label>
    <input type="text" name="nom">
    <br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom">
    <br>
    <input type="submit" name="submit" value="Envoyer">
</form>

    
</body>
</html>