         
         <?php
                if (!empty($_POST)){
                    if(!empty($_POST['color'])){
                        $color=$_POST['color'];
                        $colorfile = fopen('log/colordata.txt','w');
                        fwrite($colorfile , $color);
                        fclose($colorfile);
                        
                    }
                }
                     $file = fopen("info.txt", "w");

                        // Récupère les valeurs des champs du formulaire
                        $title = $_POST["title"];
                        $titleheader = $_POST["titleheader"];
                        $subtitltle = $_POST["subtitltle"];

                            // Écrit les valeurs des champs dans le fichier
                            fwrite($file, "$title\n");

                            // Ferme le fichier
                            fclose($file);

          $section= file_get_contents("log/colordata.txt");
          echo"Ma couleur du formulaire est : ".$section;

        
          
                ?>
                

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
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
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5" style="background-color:<?php echo $section?>!important">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <!--formulaire-->
          
                    <form method="POST" id="form_user">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="insérer votre Email @">
                    <br>
                    <label for="firstname">Prenom</label>
                    <input type="text" id="firstname" name="firstname" placeholder="votre prénom">
                    <br>
                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname" placeholder="votre nom">
                    <br>
                    <input type="submit" id="validate" name="validate" value="je m'inscris">

                    </form>
                    <!--formulaire color-->
                <form  method="post" id="color">
                 <input type="color" name="color" id="color">
                 <input type="submit" value="Envoyer"id="color">
                 <br>
                 <label for="title">titre du site</label>
                 <input type="text" id="title" name="firsttitle">
                 <br>
                 <label for="titleheader">titre du haut</label>
                 <input type="text" id="titleheader" name="secondtitle">
                 <br>
                 <label for="subtitelheader">sous titre</label>
                 <input type="text" id="subtitelheader" name="subtitle">
                 <label for="image">image</label>

                 <br>
                </form>

                <?php
                if(!empty($_POST)){
                    if(!empty($_POST['websitename'])&&!empty($_POST{'title'})&& !empty('subtitle'));
                    $website = $_POST['websitename'];
                    $title= $_POST['title'];
                    $subtitle = $_POST['subtitltle'];
                    
                    $table =array ('websiteName' => $website, 'title'=>title,"");
                }

                ?>

                <!--fin du formulaire-->

      
                      <?php
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                // echo $_POST['email'];
                //Si mon prenom fait moins de 5 caractères 
                //afficher un message d'erreur
                if(!empty($_POST)){

                $name =$_POST['firstname'];
                // echo strlen(name);
                if (strlen($name)<5){
                    echo "<p style='color:red'>ERREUR le prénom fait moins de 5 caractères</p>";
                    }else{
                        echo"<p style='color:green'>Le prénom est niquel</p>";
                        $file= fopen('log/data.txt','a+');
                         $log="L'utilisateur : ".$_POST['email']."a réussi à s'inscrire".".".date('d/m/y h:i:s A');
                        fclose($file);//le fermer à la fin 


                        

                  }
                }

                //exo :
                //créer un nouveau formulaire : Personalisation 
                    //- input -> ajouter la couleur 
                    // Enregistrer la couleur dans un fichier .txt
                    //puis récuperer l'information du fichier .txt pour changer la couleur du header du site
                //exo2
                //Via le formulaire de personalisation (couleur)
                //ajouter un champs pour : 
                //-Titre du site (text)
                //-Titre du header (text)
                //sous-titre du header (text)
                //-image du produit (???)
                //Ajouter les infos à travers un tableau de donnée  en JSON pour plus tard
                
                
                ?>
                <form>
                <!--formulaire-->
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
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
