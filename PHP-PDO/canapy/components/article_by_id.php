<!-- Start Column 1 -->
<?php
//verifier que c'est vide
//get

?>

<div class="col-12 col-md-4 col-lg-3 mb-5">
    <a class="product-item" href="single_article.php?idarticle=<?php echo $article['id_article']; ?>">
        <img src="images/upload/<?php echo $article['image']; ?>" class="img-fluid product-thumbnail">

        <h3 class="product-title"><?php echo $article['title']; ?></h3>
        <strong class="product-price"><?php echo $article['price']; ?>€</strong>

        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    </a>
</div>
