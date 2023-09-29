<?php
//$db
if(!empty($_POST)){
    if( !empty($_POST($title))&& !empty ($_POST($price))&& !empty($_FILES) ){
        $insertArticle = $db-> prepare('INSERT INTO article (`title`,`price`,`image`) 
        values (:title,:price,:image)');
        $insertArticle->bindParam(':title' , $title);
        $insertArticle->bindParam(':price' , $price);
        $insertArticle->bindParam(':image' , $image);

        $insertArticle->execute();
    }
}

?>