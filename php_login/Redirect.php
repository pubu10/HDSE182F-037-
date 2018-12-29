<?php 


session_start(); 
if(isset($_SESSION['user'])){ 
    $_SESSION['time'] = time()+10;
    header("Location:wecome.php"); 
    //exit; 
} else{
 header('Location:index.php');

}
 
?> 