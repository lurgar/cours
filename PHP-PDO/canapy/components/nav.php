<?php

$current_page=basename($_SERVER['REQUEST_URI']); //savoir dans quel fichier nous sommes (nous sommes dans shop)
?>


<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="index.html">Furni<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li <?php if($current_page == "index.php"){ echo "class='active'";}?>>
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li <?php if($current_page == "shop.php"){ echo "class='active'";}?>>
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <li <?php if($current_page == "about.php"){ echo "class='active'";}?>>
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li <?php if($current_page == "creation.php"){ echo "class='active'";}?>>
                        <a class="nav-link" href="creation.php">Créer un produit</a>
                    </li>
                    <li <?php if($current_page == "services.php"){ echo "class='active'";}?>>
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li <?php if($current_page == "blog.php"){ echo "class='active'";}?>>
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li <?php if($current_page == "contact.php"){ echo "class='active'";}?>>
                        <a class="nav-link" href="contact.php">Contact us</a>
                    </li>
                </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
                <li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
            </ul>
        </div>
    </div>

</nav>