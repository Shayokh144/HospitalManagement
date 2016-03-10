<?php
ob_start();
session_start(); 
setcookie("cook","",time()-32000);
session_destroy();
header('Location:lcheck.php');
?>