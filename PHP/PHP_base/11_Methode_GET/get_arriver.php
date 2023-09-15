<?php
//ce  n'est valable que si on veut récuperer les infos sur la même page
if($_GET){
    echo $_GET['produit'] . " à la " . $_GET['variete'] . '<br>';
    echo "vendu au prix de " . $_GET['prix']."€, aujourd'hui seulement !";
}

