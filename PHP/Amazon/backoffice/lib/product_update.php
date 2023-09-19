<?php

if (!empty($_POST)) {
    if (!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_FILES['image']) && !empty($_POST['stock'])) {
        $image = $_FILES['image']['name'];
        extract($_POST);
        print_r($_POST);

        // $sqlSelectProduct = "SELECT * FROM `product` ";
        // $tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);
        // $product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);

        echo $idprd;

        $id_user =  $_SESSION['id_user'];


        $sqlUpdate = "UPDATE `product` SET `title`='$title',`price`='$price',`description`='$description',`stock`= '$stock',`id_user`='$id_user',`discount`= '$discount' WHERE id_product= $idprd ";
        echo $sqlUpdate;
        
        mysqli_query($db_connect,  $sqlUpdate);
    }
         $folder = "img/upload/";  
         $imgResult = $folder.$image;
        // "../img/upload/mon_image.jpg"
        
        $tmpName = $_FILES['image']['tmp_name'];
        $type = $_FILES['image']['type'];

        if($type == "image/jpeg" || $type == "image/png" || $type == "image/webp" ){

            if( move_uploaded_file( $tmpName, $imgResult ) ){
                // echo "Image Uploadé avec succès";
            }else{
                // echo "Echec de l'upload";
            }

        }else{

            // echo "Mauvais format d'image, JPEG, PNG OU Webp only !";

        }
}


?>