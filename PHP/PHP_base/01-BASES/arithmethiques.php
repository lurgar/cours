<style>
	body { margin-bottom: 400px; padding: 60px; }
	h2 { font-size: 2em; color: orange; border-top: 1px solid gray; border-bottom: 1px solid gray; text-align: center; }
	pre { border: 1px solid #000; height: auto; width: 100%; background: #ccc; }
	pre p { font-size: 1.2em; padding-left: 20px; }
	.topnav { background: #333; overflow: hidden; }
	.topnav a { float: left; color: #F2F2F2; text-align: center; padding: 14px 16px; text-decoration: none; font-size: 17px; }
	.topnav a:hover { background: #ddd; color: black; }
	.texte p { color: black; font-size: 1.3em; text-indent: justify; }
</style>
<div class="topnav">
	<a href="bases.php">Bases</a>
	<a href="arithmetiques.php">Arithméthiques</a>
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
//--------------------
echo '<h2> opérateurs arithmétiques </h2>';
//--------------------
$a = 10;
$b = 2;
echo '<pre>';
	echo '<p>$a = 10;<br>$b = 2;</p>';
	echo '<p>1. $a + $b;</p>';
	echo '<p>2. $a - $b;</p>';
	echo '<p>3. $a * $b;</p>';
	echo '<p>4. $a / $b;</p>';
	echo '<p>5. $a % $b;</p><br> NB: modulo = reste de la division entière. Exemple 3 % 2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main</p>';
echo '</pre><br>';

echo $a + $b . '<br>';   // affiche 12
echo $a - $b . '<br>';   // affiche 8
echo $a * $b . '<br>';   // affiche 20
echo $a / $b . '<br>';   // affiche 5
echo $a % $b . '<br>';   // affiche 0. modulo = reste de la division entière. Exemple 3%2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main 

//------------------
// Opération et affectation combinées :
//--------------------
echo '<h2>Opération et affectation combinées</h2>';
//--------------------
$a = 10;
$b = 2;

$a += $b;    // équivaut à $a = $a + $b, $a vaut donc au final 12
$a -= $b;    // équivaut à $a = $a - $b, $a vaut donc au final 10
$a *= $b;    // équivaut à $a = $a * $b, $a vaut donc au final 20
$a /= $b;    // équivaut à $a = $a / $b, $a vaut donc au final 10
$a %= $b;    // équivaut à $a = $a % $b, $a vaut donc au final 0

echo '<pre>';
	echo '<p>$a = 10;<br>$b = 2;</p>';
	echo '<p>1. $a += $b;// équivaut à $a = $a + $b</p>';
	echo '<p>2. $a -= $b;// équivaut à $a = $a - $b</p>';
	echo '<p>3. $a *= $b;// équivaut à $a = $a * $b</p>';
	echo '<p>4. $a /= $b;// équivaut à $a = $a / $b</p>';
	echo '<p>5. $a %= $b;// équivaut à $a = $a % $b</p>';
echo '</pre><br>';

// Exemple d'utilisation : pratique pour faire des calculs de quantités dans les paniers d'achat (+= et -=)

//--------------------
echo '<h2>Incrémenter et décrémenter</h2>';
//--------------------
//------------------
// Incrémenter et décrémenter :
$i = 0;
$i++;    // on ajoute 1 à $i qui vaut au final 1
$i--;    // on retire 1 à $i qui vaut au final 0

$i = 0;
$k = $i++; // la variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k

echo '<pre>';
	echo '<p>$i = 0;</p>';
	echo '<p>$i++;// on ajoute 1 à $i qui vaut au final 1</p>';
	echo '<p>$i--;// on soustrait 1 à $i qui vaut au final 0</p>';
	echo '<p></p>';
	echo '<p>$i = 0</p>';
	echo '<p>$k = ++$i;// la variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k</p>';
echo '</pre><br>';

echo '$i vaut ' . $i . '<br>'; // 1
echo '$k vaut ' . $k . '<br>'; // 1


$i = 2;
$k = $i++;   // la variable $i est d'abord retournée, puis elle est incrémentée de 1

echo '<pre>';
	echo '<p>$i = 0;</p>';
	echo '<p>$k = $i++;// la variable $i est d\'abord retournée, puis elle est incrémentée de 1</p>';
echo '</pre><br>';

echo '$i vaut ' . $i . '<br>'; // 3
echo '$k vaut ' . $k . '<br>'; // 2
