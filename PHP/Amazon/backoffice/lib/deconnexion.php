<?php
session_start();//si on veut manipuler la session, on doit l'appeler
session_unset();//unset va vider les variables $_Session
session_destroy();//va détruire la variable $session et du coup la session elle même
header('Location:../index.php');//petite redirection sur la page d'acceuil du site 

?>