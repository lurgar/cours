<!--une session sert a conserver des informations temporaire. on peut ouvrire une session uttilisateur qui a mis un produit dans son panier mais on n'envoie pas cette information en BDD,car elle n'est pas définitive . peut-être va t-il supprimer ce produit de son panier, ou ajouter un deuxieme etc-->

<?php


//pour qu'une session puisse être débutée et que l'on puisse récuperer ses informations, il faut declarer, avans toute chose (doctype etc) une session_start
session_start();

$_SESSION['prenom'] = "Delia";
$_SESSION['statut'] = "admin";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>
<body>
    <button><a href="session_arrive.php">Aller vers le profil</a></button>
</body>
</html>
