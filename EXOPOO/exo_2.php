<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Enregistrement d'utilisateurs</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Formulaire d'inscription</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" name="firstname" id="firstname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Mail</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    class User {
        public $firstname;
        public $lastname;
        public $email;
        public function __construct($firstname, $lastname, $email) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $users = [];
        if (file_exists("users.json")) {
            $users_json = file_get_contents("users.json");
            $users = json_decode($users_json);
        }
        $new_user = new User($firstname, $lastname, $email);
        $users[] = $new_user;
        $users_json = json_encode($users, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents("users.json", $users_json);
        echo "<div class='text-center text-success mt-3'>Votre enregistrement a été effectué avec succès !</div>";
    }
    ?>
</body>