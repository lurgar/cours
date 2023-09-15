<?php
//une variable permet de stocker des valeurs 
$ListePrenom="Asuma,Naruto,Kazuto,Hinata";

echo $ListePrenom . '<br>';

$tableauPrenom = array("Asuma","Naruto","Kazuto","Hinata",15);

echo "<pre>";print_r($tableauPrenom);"</pre>";
echo "<pre>";var_dump($tableauPrenom);"</pre>";

echo "<br>";
echo $tableauPrenom[1] . "<br>";

//autre syntaxe pour declarer un tableau 
//elle est plus pratique que la premiere pour ajouter des éléments au tableau au fur et a mesure de notre code si on ne les connaît pas tous au départ.

$listePays[] = "France";
$listePays[] = "Japon";
$listePays[] = "Canada";
$listePays[] = "Italie";
$listePays[] = "Espagne";
$listePays[] = "Maroc";

//boucle foreach adapté aux tableau

foreach($listePays as $indice => $valeur){
        echo "<p>" . $valeur . "a pour indice" . $indice . "</p>";
}

//foreach version ul/li

echo "<ul>";
foreach ($listePays as $indice => $valeur){
    echo "<li>la valeur" . $valeur . " a pour indice" . $indice . "</li>";
}
echo "</ul>";

//permet d'afficher me tableau sous forme de chaine de caractére; sépare chaque élément avec le 1er argument de la fonction (ici c'est "-"

echo "<p>" . implode ("-",$tableauPrenom) . "</p>";

//count  et sizeof

//sizeof() fonction est un alias de la fonction count()
//les 2 renvoie le nombre d'élements d'un tableau 
//sizeof() prend un temp d'exécution plus long
echo count($tableauPrenom). '<br>';
echo sizeof($tableauPrenom). '<br>';







