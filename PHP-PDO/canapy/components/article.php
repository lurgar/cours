<?php
$articleInstance= new Article($db);
$articles=$articleInstance->selectAll();
?>

<div class="untree_co-section product-section before-footer-section">
	<div class="container"></div>
	<div class="row">
		
		<?php foreach ($articles as $artSingle) { ?>
			<!-- Start Column 1 -->
			<div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="single_article.php?idarticle=<?php echo $artSingle['id_article']; ?>">
					<img src="images/upload/<?php echo $artSingle['image']; ?>" class="img-fluid 
                            product-thumbnail">

					<h3 class="product-title"><?php echo $artSingle['title']; ?></h3>
					<strong class="product-price"><?php echo $artSingle['price']; ?>€</strong>

					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>
				</a>
			</div>
		<?php } ?>