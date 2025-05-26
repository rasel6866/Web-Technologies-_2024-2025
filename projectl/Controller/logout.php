<?php
session_start();        

session_unset();              
session_destroy();            


setcookie("username", "", time() - 3600, "/"); 


header("Location: ../View/login.php");
exit();
?>
