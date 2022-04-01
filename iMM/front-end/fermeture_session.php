<?php 
session_start();

session_unset();

session_destroy();

echo 'Déconnecté';

header("location: index.php");

?>