<?php

session_start(); 
include ("data.php");

 $press = $_POST['press'];
if(mysql_query(" UPDATE `pressrelz`  SET `press`='$press' "))
    {
		 $_SESSION["updatepress"] = "updatepress";
        header('Location:adminpress.php');
    }

	
	
	

mysql_close($con);
	

?>