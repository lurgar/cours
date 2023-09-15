<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Addition de deux nombres</title>
</head>

<body>
    <form  method="post">
        <input type="number" name="nombre1" placeholder="Premier nombre">
        <input type="number" name="nombre2" placeholder="Deuxième nombre">
        <input type="submit" value="Additionner">
    </form>

    <?php

if (!empty($nombre1) && !empty($nombre2)) {
        echo "La somme de $nombre1 et $nombre2 est égale à $somme.";
    } 



    // Récupération des données de l'utilisateur
    
    print_r($_POST['nombre2']);
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];

    // Calcul de la somme
    $somme = $nombre1 + $nombre2;

    // Affichage du résultat
    echo "La somme de $nombre1 et $nombre2 est égale à $somme.";
    ?>
</body>

</html>