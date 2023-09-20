

<?php

if(!empty($_POST) ) {
extract($_POST);
//extrat transform une clé du tableau $_POST en variable ayant le même nom
//$_POST['email']=>$email
//$_POST['password']=>$password

if(!empty($email)&& !empty($Password)){

    $passwordCrypted=md5($Password);

    $sqlSelectUser = "SELECT * FROM user WHERE email =  '$email' AND password='$passwordCrypted'";
    // echo $sqlSelectUser;
    $tableSelectUser=mysqli_query($db_connect,$sqlSelectUser);//requête SQL executer

    $user = mysqli_fetch_assoc($tableSelectUser);//convertit en tavleau

    print_r($user);

    if(mysqli_num_rows($tableSelectUser)==1 ){
        //identifiant correct
      session_start();//obligatoire si on veut créer une session
    //   $_SESSION=['prenom']= $user='ahmed';
         $_SESSION["firstname"]=$user["firstname"];//$user=cache
         $_SESSION["lastname"] =$user ["lastname"];
         $_SESSION["email"] = $user["email"];
         $_SESSION["user_statut"]  = $user["user_statut"] ;
         $_SESSION["id_user"]  = $user["id_user"] ;
         $_SESSION["date_register"]  = $user["date_register"] ;
         $_SESSION["image"]= $user["image_user"];//avatar
         
        if($user["user_statut"]==0){
            //uttilisateur
            header(('location:../index.php'));
        }elseif($user["user_statut"]==1){
            //modérateur
            header(('location:../index.php'));
        }elseif($user["user_statut"]==2)
            //admin
            header(('location:./index.php'));
            //redirigérer dans le backoffice


      echo $_SESSION['prenom'];

    }else{
        // echo"email ou mot de passe incorect";

        //mot de passe et email incorrect

        $imgEror='style="background-image:url(https://www.peuple-animal.com/data/document/2/1579.800.jpg)";';
        $textEror='email ou mot de passe incorrect';
    }


}


    }


?>