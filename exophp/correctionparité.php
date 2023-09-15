<?php

    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        if($nombre % 2 == 0){
            echo "$nombre est un nombre pair";
        } else {
            echo "$nombre est un nombre impair";
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de la parité</title>
</head>
<body>
    <form method="post" action>
        <label for="nombre">Nombre</label>
        <input type="number" name="nombre">
        <br>
        <input type="submit" name="submit" value="Vérifier">
    </form>
    
</body>
</html>