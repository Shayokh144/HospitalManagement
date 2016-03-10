<?php

session_start(); 
include ("data.php");

 $q = $_GET['q'];
if(mysql_query(" UPDATE upcomingevent  SET event='$q'  WHERE eventid=1 "))
    {
		 $_SESSION["updateevent"] = "updateevent";
       // header('Location:adminevent.php');
    }

	

	

mysql_close($con);
	

?>