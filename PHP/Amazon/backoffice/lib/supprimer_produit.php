<?php
 require_once("../lib/db.php");
 $idproduit=$_GET['idproduit'];

//requete sql delete
$sqlSelectProduct="DELETE * FROM `product` WHERE `id_product` = $idproduit";

if(mysqli_query($db_connect,$sqlSelectProduct)){

    echo'le produit a bien été supprimé';
    header('Location:../index.php');
}else{

 //   redirection sur page dashboard
}

// redirirection page dashboard

//  $id_user =  $_SESSION['id_user'];
 
//  $id_product = $_GET['id_product'];


//petite redirection sur la page d'acceuil du site 



    // mysqli_query($db_connect,  $sqlUpdate);


?>