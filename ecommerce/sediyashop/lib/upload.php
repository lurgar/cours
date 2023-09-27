<?php
if(!empty($_FILES)){

    print_r($_FILES);
    $image_name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];

    $folder="assets/";
    $file=$folder.$image_name;
}
?>