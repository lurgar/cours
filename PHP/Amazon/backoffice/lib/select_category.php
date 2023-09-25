<?php


$sqlSelectCategory="SELECT * FROM category";
$tableSeleCategory=mysqli_query($db_connect,$sqlSelectCategory);
$category=mysqli_fetch_all($tableSeleCategory, MYSQLI_ASSOC);

?>