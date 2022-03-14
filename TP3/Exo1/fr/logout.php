<?php   
session_start();
session_unset(); 
session_destroy(); 
header("location:/IDAW/TP3/Exo1/index.php?page=login&lang=fr"); 
?>