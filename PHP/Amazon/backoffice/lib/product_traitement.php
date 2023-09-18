<?php
//Créer un formulaire pour ajouter un produit
//- le rendre fonctionnel !
//Créer un second formulaire MAIS pour modifier un article précis
//
if(!empty($_POST)){

    extract($_POST);
$image=$_FILES['image']['name'];

   
if (!empty($title) && !empty($price) && !empty($description) && !empty($image) && !empty($stock)){

// echo 'votre formulaire est bien rempli';

$iduser= $_SESSION['id_user'];// le créateur du produit est celui de la session connecté 
//soit, $_SESSION

$title=str_replace("'","''",$title);
$description =str_replace("'","''",$description);

$sqlProductInsert="INSERT INTO `product`(`title`,`description`,`image`,`stock`,`id_user`,`discount`;) VALUES($title,$description,$image,$stock,$id_user,$discount)";{
    
    if(mysql_query($db_connect, $sqlProductInsert) ){
        echo"Produit crée";
    }else{
        echo"Echec lors de la création";
    }

}
// echo$slqProductInsert;


}

    
 print_r($_POST);
 print_r($_FILES);


                }
?>