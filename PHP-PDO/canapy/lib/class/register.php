<?php
// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['user'])) {
  header('Location: index.php');
  exit();
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {

  // Récupérer les données du formulaire
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

  // Vérifier la validité des données
  if (empty($username)) {
    $error['username'] = 'Le champ "Nom d'utilisateur" est obligatoire.';
  }
  if (empty($email)) {
    $error['email'] = 'Le champ "Email" est obligatoire.';
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error['email'] = 'L\'adresse email n\'est pas valide.';
  }
  if (empty($password)) {
    $error['password'] = 'Le champ "Mot de passe" est obligatoire.';
  }
  if ($password != $password_confirm) {
    $error['password_confirm'] = 'Les mots de passe ne correspondent pas.';
  }

  // Si aucune erreur n'a été détectée
  if (empty($error)) {

    // Hasher le mot de passe
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insérer l'utilisateur dans la base de données
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $db->query($sql);

    // Créer une session pour l'utilisateur
    $_SESSION['user'] = [
      'username' => $username,
      'email' => $email,
    ];

    // Rediriger l'utilisateur vers la page d'accueil
    header('Location: index.php');
    exit();
  }
}
?> 
// Afficher le formulaire d'inscription


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
</head>
<body>

  <h1>Inscription</h1>

  <?php if (!empty($error)) : ?>
    <div class="alert alert-danger">
      <?php foreach ($error as $key => $value) : ?>
        <p><?php echo $value; ?></p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <form action="register.php" method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="password" name="password_confirm" placeholder="Confirmation du mot de passe">
    <input type="submit" name="submit" value="S'inscrire">
  </form>

</body>
</html>