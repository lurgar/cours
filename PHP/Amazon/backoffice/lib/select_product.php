<?php

$sqlSelectProduct="SELECT * FROM `product` INNER JOIN `user` ON product.id_user = user.id_user";
//on prépare en string, une requete sql 
$tableselectProduct=mysqli_query($db_connect,$sqlSelectProduct);//on prépare la requette sql  et on stock le résultat 
                                                                    //dans une ve
// echo"coucou";

$product= mysqli_fetch_all($tableselectProduct,MYSQLI_ASSOC);

print_r($product);




?>