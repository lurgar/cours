<?php

// $a=2;
// $b=12;
// $r=$a+$b;

// // 1ere possibilité: afficher les différentes variables séparées par des point
// //L'echappement \ donne au guillemets sa signification littérale
// print "ECHO <br>";

// echo $a . "+" . $b . "=" . $r . " " . "\"by echo\"";
// echo "<br>";

// echo "\$a" , "+", "\$b" , "=" , $r , "\"by echo\"";
// echo "<br>";

// // 2éme possibilité: on met l'ensemble des variables dans une seule chaîne.

// echo "$a+$b=$r \"by echo\" ";
// echo "<br>";

// echo "\$a+\$b=$r \"by echo\" ";
// echo "<br>";

// // 3éme possibilité: on peut faire des concaténations

// echo $a."+".$b."=".$r." \"by echo\"";
// echo "<br>";

// echo "\$a"."+"."\$b"."=".$r." \"by echo\" ";
// echo "<br><hr>";

// // ********************Print***********************************
// print "PRINT <br>";
// print "$a+$b=$r \"by print\" ";
// print "<br>";

// print "\$a+\$b=$r \"by print\" ";
// print "<br><hr>";

// // on peut faire des concaténations 
// print "Concatenations <br>";

// print $a."+".$b."=".$r." \"by print\"";
// print "<br>";

// print "\$a"."+"."\$b"."=".$r." \"by echo\" ";
// print "<br><hr>";


// $ch="les chaines de caractères";
// echo ucwords($ch);
// echo "<hr>";

// $titre1="Structures de base";
// $titre2="Les classes";
// $page1="1";
// $page2="5";
// echo "<br>";
// echo "<pre>";
//  //on complète par des espaces pour la première ligne jusqu'à arriver à 20 caractères
// //  pour les numéros de pages on complète sur le coté gauche

// echo str_pad("Chapitres",20," "),str_pad("Pages",20," ",STR_PAD_LEFT),"<br>";
// echo str_pad($titre1,20," "),str_pad($page1,20,".",STR_PAD_LEFT),"<br>";
// echo str_pad($titre2,20," "),str_pad($page2,20,".",STR_PAD_LEFT),"<br>";
// echo "</pre><br><hr>";

// echo "<pre>";
// echo htmlspecialchars("<ul>
// <li>item 1</li>
// <li>item 2</li>
// </ul>");

// echo "<br><br>";

// echo htmlentities("<ul>
// <li>item 1</li>
// <li>item 2</li>
// </ul>");

// echo "</pre><br><hr>";

//1. Créer et initialiser un tableau $notes avec les valeurs suivantes :
//clé	valeur
//said	13
//badr	16
//najat	15

// Créer le tableau
$notes = array();

// Ajouter les valeurs au tableau
$notes['said'] = 13;
$notes['badr'] = 16;
$notes['najat'] = 15;

// Afficher le tableau
echo "<pre>";
var_dump($notes);
echo "</pre>";

//2. Ajouter au  tableau la note 10 de l’étudiant "karim".

$notes["karim"] = 10;
//3. Supprimer l'element qui a la cle key
unset($notes['badr']);
var_dump($notes);
echo"<hr>";
//4. Déterminer la note maximale et la note  minimale du groupe.
echo"la note maximale est : " .max($notes) ." la note minimale est : ".min($notes);

//5. Afficher le tableau après l'avoir trier  par ordre alphabétique .
ksort($notes);
echo"<hr>";

// la boucle foreach pour parcourir le couples clés => valeur d'un tableau 
foreach($notes as  $key => $value){
    echo"la note de l'étudiant $key est : $value <br>";
}
echo"<hr>";
//6. Classer les étudiants  par ordre de mérite et afficher  le tableau.
//7. Déterminer la moyenne de la classe.
// 1. Initialiser le tableau $note :
// depuis PHP 5.4 déclaration avec []
    $note = [
        "said" => 13,
        "badr" => 16,
        "najat" =>15,
        "ali" =>10,        
    ];
    print_r($note);
    echo "<hr>";

// 2. Ajouter un élément

    $note["karim"]=10;// ajoute le couple "karim"=>10
    var_dump($note);// affiche les informations structurées d'une variable
    echo "<hr>";
// 3. Suprimer un élément du tableau

    unset($note["badr"]); //supprimer l'eleùent qui possede la clé "badr"
    var_dump($note);
    echo "<hr>";

    // 4 . Calculer le max et le min :
    // les fonction max() et min() renvoient successivement le maximum et le minimum des valeurs d'un tableau

    echo "la note maximale est: " . max($note) ." la note minimale est: " . min($note);

    // 5. Trier le tableau par ordre alphabétique des étudiants (les clés)
    // ksort() fonction qui tri les clés d'un tableau par ordre alphabétique
    ksort($note);
    echo "<hr>";

    // la boucle foreach pour parcourir les couples clé=>valeur d'un tableau
        foreach($note as $key => $value){ // as= comme
            echo "la note de l'étudiant $key est : $value <br>";
        }

echo "<hr>";

// pour calculer la moyenne de la classe, on peut utiliser la fonction array_sum() qui renvoie la somme des valeurs d'un tableau et la fonction count() qui renvoie la taille d'un tableau ici le nombre des étudiants de la classe

echo"la moyenne de la classe: " . array_sum($note)/count($note);

?>