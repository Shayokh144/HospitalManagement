<?php

session_start(); 
include ("data.php");

 $pnotice = $_POST['pnotice'];
 
 $dnotice = $_POST['dnotice'];

 
 $snotice = $_POST['snotice'];

 
if(mysql_query(" UPDATE `noticeboard`   SET `pnotice`='$pnotice',`dnotice`='$dnotice',`snotice`='$snotice' "))
    {
		 $_SESSION["updateevent"] = "updateevent";
        header('Location:adminnotice.php');
    }

	
	
	

mysql_close($con);
	

?>