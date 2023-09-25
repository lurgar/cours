<?php 

session_start();
require_once('../backoffice/lib/db.php');                   // connexion à la base de donnée
require_once('../backoffice/lib/select_product_by_id.php'); // récupère les infos d'un produit par rapport à son ID
require_once('../backoffice/lib/select_product.php');
 



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    
                    if( empty($_SESSION) ) { ?> 
                    
                        <form class="d-flex" style="    margin-right: 10px;">
                            <a class="btn btn-outline-dark" href="backoffice/login.php">
                                <i class="bi-box-arrow-in-right me-1"></i>
                                connexion
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>
                        <form class="d-flex">
                            <a class="btn btn-outline-dark" href="backoffice/register.php">
                                <i class="bi-file-earmark-diff me-1"></i>
                                inscription
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>

                    <?php } else { ?>
                        
                        

                        <form class="d-flex" style="margin-right: 10px;">
                            <a class="btn btn-outline-dark" href="backoffice/lib/deconnexion.php">
                                <i class="bi-file-earmark-diff me-1"></i>
                                Déconnexion
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>

                    <?php } ?>



                    <?php 
                    
                    if(!empty($_SESSION)){
                        if( $_SESSION['user_statut'] != 0 ){ 
                        
                    ?>

                        <form class="d-flex" style="    margin-right: 10px;">
                            <a class="btn btn-outline-dark" href="backoffice">
                                <i class="bi-box-arrow-in-right me-1"></i>
                                Dashboard
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>

                    <?php 
                
                        } 
                    }   
                    ?>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" 
                    src="../backoffice/img/upload/<?php echo $product[0]['image']; ?>" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BST-498</div>
                        <h1 class="display-5 fw-bolder"><?php echo $product[0]['title']; ?></h1>
                        <div class="fs-5 mb-5">

                            <?php if($product[0]['discount'] > 0 ) { ?>

                                <span class="text-muted text-decoration-line-through"><?php echo $product[0]['price']; ?> €</span>
                                <?php 
                                $prixReduc = ($product[0]['price'] * $product[0]['discount']) / 100;
                                // calcule de la réduction à soustraire

                                $prixTotal = $product[0]['price'] - $prixReduc;
                                // calcule du prix de base - la réduction

                                echo $prixTotal; 

                                ?> €

                            <?php } else { 

                                echo $product[0]['price']." €";

                            } ?>

                        </div>
                        <p class="lead"><?php echo $product[0]['description']; ?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                <?php foreach( $products as $productsingle) { 
                    if($productsingle['id_product']!= $_GET['idproduit']){
                    ?>
                        <!-- Début Produit -->
                        <div class="col mb-5">
                            <?php echo $productsingle['id_product'];?>
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <?php if( $productsingle['discount'] > 0 ){ ?>

                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo $productsingle['discount']." %"; ?></div>
                                
                                <?php } ?> 
                                <!-- Product image-->

                                <img  class="card-img-top" src="../backoffice/img/upload/<?php echo $productsingle['image'];?>" alt="..." />
                                
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"> <?php echo $productsingle['title']; ?> </h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->

                                        <?php if( $productsingle['discount'] > 0 ) { ?>

                                            <span class="text-muted text-decoration-line-through"><?php echo $productsingle['price']; ?> €</span>
                                            <?php 
                                            
                                            $prixReduc = ($productsingle['price'] * $productsingle['discount']) / 100;
                                            // calcule de la réduction à soustraire

                                            $prixTotal = $productsingle['price'] - $prixReduc;
                                            // calcule du prix de base - la réduction

                                            echo $prixTotal; 
                                            
                                            ?> €

                                        <?php } else { 


                                            echo $productsingle['price']." €";

                                        }
                                         } ?>


                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto" href="single_article/index.php?idproduit=<?php echo $productsingle['id_product']; ?>">voir le produit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Produit -->

                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
