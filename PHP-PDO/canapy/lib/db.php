<?php

$user="root";
$pwd="";
$db_name="canapy";
$server="localhost";


try {
    $db = new PDO("mysql:host=$server;dbname=$db_name", $user, $pwd);

} catch (PDOException $e) {
    
    $error_msg = "<p style ='color:red;'> ".$e-> getMessage()."</p>";
   
    if($_SERVER['HTTP_HOST']=="localhost"){
        //  echo $error_msg;
        //  echo $_SERVER['HTTP_HOST'];
    }
    // print_r($e);
   
}

// $db = new PDO("mysql:host='$server';dbname=$db_name", $user, $pwd);
// $db = new PDO('mysql:host=localhost;dbname=canapy', $user, $pwd);
  ?>
 
