<?php

if (!empty($_POST)) {

    extract($_POST);
    $image = $_FILES['image']['name'];
    $iduser = $_SESSION['id_user'];
    $idprd=$_GET['id_product'];

    
    if( !empty($title) && !empty($price) && !empty($stock) && !empty($description) && !empty($image) && !empty($category)){

     $sqlUpdate = "SELECT `product` SET `title`='$title',`description`='$description',`image`='$image',`stock`='$stock',`id_user`='$iduser',`discount`='$discount',`id_category`='$category' WHERE  id_product= $idprd ";

        


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


// <?php 

// // print_r($_FILES);

// if ( !empty($_FILES) ){

//     $image = $_FILES['image']['name'];
//     $tmp_name = $_FILES['image']['tmp_name'];
//     $id_user = $_SESSION['id_user']; // ID de l'utilisateur connecté
//     $type = $_FILES['image']['type'];
    
//     if( $type == "image/jpeg" || $type == "image/png" || $type == "image/webp" ){
        
//         $folder = "img/avatar/";
//         $upload = $folder.$image;
//         // img/avatar/image.jpg

//         if( move_uploaded_file($tmp_name, $upload) ){
//             echo "transfert réussi";
//         }else{
//             echo "Echec du transfert";
//         }

//         $sqlUpdateImage = "UPDATE user SET `image_user` = '$image' WHERE `id_user` = $id_user ";
//         mysqli_query($db_connect, $sqlUpdateImage);

//         $_SESSION['image'] = $image;



//     }else{

//         echo "Type d'image non pris en charge";

//     }

// }






?>

?>