<?php
require_once('lib/db.php');
require_once('lib/class/User.php');
$user=new User($db);
$user->logout();
?>
