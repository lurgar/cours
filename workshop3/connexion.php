<?php
$servename="localhost";
$username="root";
$password="";
$dbname="shop";

$conn = new mysqli($servename,$username, $password,$dbname);

if($conn->connect_error){
    die("la connection a echoué:" .$conn->connect_error);
}

?>