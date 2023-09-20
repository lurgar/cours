<?php


// print_r($_FILES);
if ( !empty($_FILES) ){
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $id_user = $_SESSION['id_user']; // ID de l'utilisateur connecté
    $type = $_FILES['image']['type'];

    if( $type == "image/jpeg" || $type == "image/png" || $type == "image/webp" ){

        $folder = "img/avatar/";
        $upload = $folder.$image;

        // img/avatar/image.jpg
               
        if( move_uploaded_file($tmp_name, $upload) ){
            
            echo "transfert réussi";
            }else{
            echo "Echec du transfert";
            }
            $sqlUpdateImage = "UPDATE `user` SET `image_user`= '$image' WHERE `id_user`= $id_user";
            mysqli_query($db_connect,$sqlUpdateImage);
            $_SESSION['image']=$image;
            
    }else{
        echo "Type d'image non pris en charge";
    }
}

?>