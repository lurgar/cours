<?php

//la méthode GET (superglobale) permet de véhiculer des informations dans l'URL pour les récupérer sur un autre fichier (ou a un endroit du même fichier) pour un affichage spécial

//première exemple, je récupere les informations sur la même page (comme un one-page)
//deuxième exemple, en récupérant les infos sur une autre page 
//dans l'attribut href, d'abord j'indique le nom du fichier ou je récupérer les infos, chaque info étant séparée de la précedente par & 
//target= '_blank' permet d'ouvrir la nouvelle page dans un autre endroit

if (!$_GET){
    echo "<button><a href='get_arriver.php? produit=Gateaux&variete=fraise&prix=12'
    variete=fraise&prix=12'target'_blank'>Tester</a></button>";
}
