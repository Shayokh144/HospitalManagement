<?php

session_start(); 
include ("data.php");

 $news = $_POST['news'];
if(mysql_query(" UPDATE `currentnews`  SET `news`='$news' "))
    {
		 $_SESSION["updatenews"] = "updatenews";
        header('Location:adminnews.php');
    }

	
	
	

mysql_close($con);
	

?>