<?php

$user="root";
$pwd="";
$db_name="canapy";
$server="localhost";


try {
    $dbh = new PDO("mysql:localhost='$server';db_name='canapy'", $user, $pwd);

} catch (PDOException $e) {
    
    $error_msg = "<p style ='color:red;'> ".$e-> getMessage()."</p>";
   
    if($_SERVER['HTTP_HOST']=="localhost"){
         echo $error_msg;
    }
    // print_r($e);
   
}

  ?>
