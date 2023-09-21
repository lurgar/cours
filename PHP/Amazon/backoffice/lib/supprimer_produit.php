<?php 
require_once('db.php');

$idproduit = $_GET['idproduit']; // ID du programme
// 1) requete SQL delete
$sqlDeleteProduct = "DELETE FROM product WHERE `id_product` = $idproduit";

 mysqli_query($db_connect, $sqlDeleteProduct);

    // echo "Le produit a bien été supprimé";
    header('Location: ../index.php');


    // echo "Echec lors de la suppression du produit";



// 2) redirection sur page deashboard







?>
