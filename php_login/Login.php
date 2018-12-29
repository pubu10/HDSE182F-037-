<?php
$_PHP_SELF = "Login.php";
if(isset($_POST['Submit']))
{
    
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "qwe" && $password == "1234")
{
	session_start(); 
        $_SESSION['user'] = $username; 
         
         header('Location:Redirect.php');
}
 else {
echo '<script language="javascript">';
echo 'alert("password wrong")';
echo '</script>';

time_sleep_until(time()+5);

}
}


?>
