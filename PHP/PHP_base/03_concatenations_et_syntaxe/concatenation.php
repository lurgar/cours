<?php

//1 Concaténation simple 

$prenom="Delia";
$nom ='Danciu';

//il y a deux maniere de concaténer en PHP
//d'abord la moins uttilisées; avec virgule 

echo 'Je suis', $prenom, " ", $nom, '<br>';


//la plus utilisée, quasi par tout le monde : le point

echo 'Je suis'. $prenom . "" . $nom . '<br>';

//2 concaténation par affection

$nombre = 'ko';

echo $nombre .='delia';


