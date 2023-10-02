<?php

$select = $db->prepare('SELECT*FROM article');
//SELECT * FROM article
$select->execute();
//objet row = 3, col = 4
$article = $select->fetchAll(PDO::FETCH_ASSOC);

print_r($article);
?>