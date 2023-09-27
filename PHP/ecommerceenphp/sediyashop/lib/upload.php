
<?php

   if ( !empty ( $_FILLES ) ) {
       print_r ( $_FILLES );
       $image_name = $_FILES [ 'image' ] [ 'name' ];
       $tmp_name = $_FILES [ 'image' ] [ 'tmp_name' ];
       $folder = "../assets/image/";
       $file = $folder.$image_name;

       if  ( move_uploaded_file ( $tmp_name , $file) ) {
       echo "L'image a été téléchargée avec succès.";
       } else {
       echo "Erreur lors du téléchargement de l'image.";
       }
   }

?>




