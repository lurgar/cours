<?php

// Initialisations
$nom = "";
$prenom = "";
$sexe = "";
$service = "";
$dateEmbauche = "";
$salaire = "";
$idSecteur = "";

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = $_POST["prenom"];
  $prenom = $_POST["nom"];
  $sexe = $_POST["sexe"];
  $service = $_POST["service"];
  $dateEmbauche = $_POST["dateEmbauche"];
  $salaire = $_POST["salaire"];
  $idSecteur = $_POST["idSecteur"];

  // Vérifications
  if (empty($nom)) {
    echo " Le prénom est obligatoire.";
    exit();
  }

  if (empty($prenom)) {
    echo "Le nom est obligatoire.";
    exit();
  }

  if (empty($service)) {
    echo "Le service est obligatoire.";
    exit();
  }

  // Ajout de l'employé
  $pdo = new PDO("mysql:host=localhost;dbname=oo_entreprise", "root", "");
  $sql = "INSERT INTO `employe`( `prenom`, `nom`, `sexe`, `service`, `dateEmbauche`, `salaire`, `idSecteur`) VALUES  (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([ $prenom,$nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur]);

  // Redirection vers la liste des employés
  header("Location: form.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des employés</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="formulaire_dajout.php">ajout employé</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="formulaire_dajout.php">Liste des employés</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ajouter un employé</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Ajout d'un employé</h1>

<form action="" method="post">
      <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $prenom; ?>">
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom; ?>">
  </div>
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <select class="form-control" id="sexe" name="sexe">
      <option value="m">Homme</option>
      <option value="f">Femme</option>
    </select>
  </div>
  <div class="form-group">
    <label for="service">Service</label>
    <input type="text" class="form-control" id="service" name="service" value="<?php echo $service; ?>">
  </div>
  <div class="form-group">
    <label for="date_embauche">Date d'embauche</label>
    <input type="date" class="form-control" id="dateEmbauche" name="dateEmbauche" value="<?php echo $dateEmbauche; ?>">
  </div>
  <div class="form-group">
    <label for="salaire">Salaire</label>
    <input type="number" class="form-control" id="salaire" name="salaire" value="<?php echo $salaire; ?>">
  </div>
  <div class="form-group">
    <label for="idsecteur">Id secteur</label>
    <input type="number" class="form-control" id="idSecteur" name="idSecteur" value="<?php echo $idsecteur; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button