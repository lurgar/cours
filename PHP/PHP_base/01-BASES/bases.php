<style>
    body {
        margin-bottom: 400px;
        padding: 60px;
    }

    h2 {
        font-size: 2em;
        color: orange;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        text-align:center;
    }
    pre {
       border: 1px solid #000; 
       height: 50px;
       background: #ccc;
    }
    pre p {
        font-size: 1.2em;
        padding-left: 20px;
    }
    .topnav {
        background: #333;
        overflow: hidden;
    }
    .topnav a {
        float: left;
        color: #F2F2F2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .topnav a:hover {
        background: #ddd;
        color: black;
    }
    .texte p {
        color: black;
        font-size: 1.3em;
        text-indent: justify;
    }
</style>

<div class="topnav">
    <a href="bases.php">Bases</a>
    <a href="arithmethiques.php">Arithméthiques</a>
    <a href="boucles.php">Boucles</a>
    <a href="concatenation.php">Concaténation</a>
    <a href="conditions.php">Conditions</a>
    <a href="constantes.php">Constantes</a>
    <a href="dates.php">Dates</a>
    <a href="fonctions.php">Fonctions</a>
    <a href="inclusion.php">Inclusion</a>
    <a href="objets.php">Objets</a>
    <a href="tableaux.php">Tableaux</a>
    <a href="variables.php">Variables</a>
</div>

<?php
// pour ouvrir un passage en PHP, on utilise la balise précédente

echo '<h2> Les balises PHP </h2>'; //echo est un instruction qui permet d'afficher dans le navigateur.Toutes les instructions se terminent par un " ; ". Dans un echo, nous pouvons mettre aussi du HTML;

// pour fermer un passage en PHP, on utilise la balise suivante:
?>

<div class="texte">
    <p>Pour éxécuté un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en php pn utilise: < ?php pour le reférmé on utilise ?> . En dehors des balises d'ouverture et de fermeture d'un passage PHP,il est possible d'écrire du HTML </p>
</div>


<?php

echo '<h2> AFFICHAGE </h2>';

echo '<pre><p> "Bonjour" </p></pre>';

echo 'Bonjour <br>';


print 'Nous sommes mardi <br>';
?>

<div class="texte">

<p>print est une autre instruction d\'affichage.Il n\'y a pas (ou peu) de différence avec un echo</p>

<p>Autres instructions d\'affichage que nous verrons plus loin: </p>

<ul>
    <li>print_r()</li>
    <li>var_dump()</li>
</ul>

</div>

<?php
    // commentaire sur une seule ligne

    /*
    commentaire sur plusieurs lignes
     */

    # autre syntaxe de commentaire sur une seule ligne
    
?>