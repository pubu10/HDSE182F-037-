<?php   
session_start(); //to ensure same session
session_destroy(); 
header('Location:index.php');
exit();
?>