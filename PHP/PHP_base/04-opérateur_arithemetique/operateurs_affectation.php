<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operateur par affectation</title>
    <style>
        /* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
<div class="navbar">
    <div class="dropdown">
        <button class="dropbtn">Affichage
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../01-affichage/instructions.php">instructions</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Variables et constantes
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../02-variables et constantes/variables.php">Variables</a>
            <a href="../02-variables et constantes/constantes.php">Constantes</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Concatenation et syntaxe
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../03-concatenation_et_syntaxe/concatenation.php">Concatenation</a>
            <a href="../03-concatenation_et_syntaxe/syntaxes_quotes.php">Syntaxe quotes</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Opérateurs arithmetique
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../04-opérateur_arithemetique/arithmetique.php">Arithmetique</a>
            <a href="../04-opérateur_arithemetique/operateurs_affectation.php">Operateurs par affectation</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Conditions
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../05-conditions/if_else.php">IF ELSE</a>
            <a href="../05-conditions/switch.php">SWITCH</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Fonctions
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../06-fonctions/predefinies.php">Predefinies</a>
            <a href="../06-fonctions/utilisateur.php">Utilisateur</a>
            <a href="../06-fonctions/exo_tva.php">EXO TVA</a>
        </div>
               <div class="dropdown">
            <button class="dropbtn">Variable globales et locales
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="../07-porté_des_variables/global_local.php">Global-Locales</a>
            </div>
    </div>
  
</div>
   

<?php

// les opérateur par affectation ont += -= *=  et /=

$premierNombre = 4;
$secondNombre = 2;

// n'ecrivez pas cette syntaxe, elle va générer une erreur php a cause du  <br> concaténer
echo $premierNombre += $secondNombre ;
echo '<br>';
// $a += $b est équivalent à $a = $a + $b;
// $c = $a + $b
//  les cas suivants von fonctionner aussi
echo $premierNombre -= $secondNombre ;
echo '<br>';
echo $premierNombre *= $secondNombre ;
echo '<br>';
echo $premierNombre /= $secondNombre ;
echo '<br>';

// utilisez les opérateur par affectation si vous êtes sur de ne plus avoir besoin de valeur  initiale de  $premierNombre. Sinon, declarez une troisième variable pour y affecter le nouveau résultat
// $troisiemeNombre = $premierNombre + $secondNombre
?>

</body>
</html>