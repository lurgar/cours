<?php
$idarticle=$_GET['idarticle'];

$select= $db->prepare("SELECT * FROM article WHERE `id_article`= :idarticle"); 
$select->bindParam(':idarticle',$idarticle,PDO::PARAM_INT);
$select->execute();
$article = $select->fetchAll(PDO::FETCH_ASSOC);
var_dump($article);
echo "test";
?>