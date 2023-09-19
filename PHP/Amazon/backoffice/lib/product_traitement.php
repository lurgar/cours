<?php 


if( !empty($_POST) ){

    extract($_POST);
    $image = $_FILES['image']['name'];

    if( !empty($title) && !empty($description) && !empty($price) && !empty($stock)  && !empty($image) ){

        $iduser = $_SESSION['id_user']; // le créateur du produit est celui de la session connecté
        // soit, $_SESSION.

        $title = str_replace("'", "''", $title);
        $description = str_replace("'", "''", $description);

        $sqlProductInsert = "INSERT INTO product (`title`, `price`, `description`, `image`, `stock`, `id_user`, `discount`) VALUES ('$title','$price','$description','$image','$stock','$iduser','$discount')";
       
        if( mysqli_query($db_connect, $sqlProductInsert) ){
            echo "Produit crée";
        }else{
            echo "Echec lors de la création";
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

}


?>