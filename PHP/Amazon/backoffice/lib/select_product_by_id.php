<?php
$idprd=$_GET['idproduit'];
$sqlSelectProduct="SELECT * FROM product WHERE `id_product` = $idprd";
// echo $sqlSelectProduct;
$sql = "SELECT * FROM `product` WHERE `id_product`=$idprd;";
//on prépare en string, une requete sql 
$tableselectProduct=mysqli_query($db_connect,$sql);//on prépare la requette sql  et on stock le résultat 
                                                                    //dans une une variable $tableselectProduct
// echo"coucou";

$product= mysqli_fetch_all($tableselectProduct,MYSQLI_ASSOC);

// print_r($product)



?>