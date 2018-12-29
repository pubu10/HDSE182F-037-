<?php

session_start();

if(isset($_SESSION['user']))
{
       ?> <h1>welcome HDSE-18.2-037</h1<br />'
       <a href='Logout.php'>Log Out Btn</a><?php
              if(time()>= $_SESSION['time'])
              {
                  
                  header('Location:Logout.php');
              }
           
header("refresh: 2;");
}
        ?>