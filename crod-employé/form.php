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
    <a class="navbar-brand" href="form.php">Liste des employés</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="formulaire_dajout.php">Ajouter un employé</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style>

</style>
  <div class="container">
    <h1>Liste des employés</h1>
    <table class="table table-dark table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Prénom</th>
          <th>Nom</th>
          <th>Sexe</th>
          <th>Service</th>
          <th>Date d'embauche</th>
          <th>Salaire</th>
          <th>Idsecteur</th>
          <th class="voir">voir</th>
          <th class="modif">modif</th>
          <th class="supp">supp</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>7256</td>
          <td>Daniel</td>
          <td>Chovel</td>
          <td>m</td>
          <td>Informatique</td>
          <td>2010-07-05</td>
          <td>1700</td>
          <td>1</td>
          <td><a class="btn btn-success" href="voir">Voir</a></td>
          <td><a class="btn btn-warning" href="modifier">Modifier</a></td>
          <td><a class="btn btn-danger" href="supprimer">Supprimer</a></td>
        </tr>     
      </tbody>
    </table>
  </div>
</body>
</html>