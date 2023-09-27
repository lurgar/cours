<?php


$sqlSelectCustom="SELECT* FROM custom";
$tableSelectCustom=mysqli_query($bdd,$sqlSelectCustom);//Connextion à la bdd et la requete précedement créer 
$custom=mysqli_fetch_all($tableSelectCustom,MYSQLI_ASSOC); //affichage du tableau multidimensionnelle
echo"<pre>";
print_r($custom);
echo"</pre>";
?>