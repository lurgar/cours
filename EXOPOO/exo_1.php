<?php

class User{

public $lastname;
public $firstname;
public $email;
public $age;
// private $password;

public function __construct($prenom, $nom, $email,$age){
    $this->firstname = $prenom;
    $this->lastname = $nom;
    $this->email= $email;
    $this-> age= $age;
}

    public function presentation(){
    echo $this->firstname." ".$this->lastname;

    }

    public function verifAge(){
        if($this-> age >= 18){
            echo " Uttimisateur majeur ";
        }else{
            echo" Uttilisateur mineur " ;
        }
    }

}

// $user1=new User ('Damien','Dupont','damien.dupont@gmail.com',15);
// $user2=new User ('Boris','Aubrun','boris.aubrun@gmail.com',27);

// $user1->presentation();
// $user1->verifAge();
?>