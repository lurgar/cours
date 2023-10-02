<?php
//$db

if(!empty($_POST)){

    extract($_POST);

    $image = $_FILES['image']['name'];

    if( !empty($title)&& !empty ($price) && !empty($_FILES) ){
       
        $insertArticle = $db->prepare('INSERT INTO `article`( `title`, `price`, `image`) VALUES (:title,:price,:image)');
        $insertArticle->bindParam(':title' , $title);
        $insertArticle->bindParam(':price' , $price);
        $insertArticle->bindParam(':image' , $image);
        $insertArticle->execute();
        $folder = "images/upload/";
        $path= $folder.$image;//images/upload/monimage.jpg
        $tmpName= $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpName,$path);

    }

}
