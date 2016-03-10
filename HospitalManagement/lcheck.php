<?php
session_start();
echo 'Session error';
if($_SESSION['id'])
	echo 'Session error';
	
	

else
{
	header('Location:home.php');
	//header('Location:.php');
	
}

?>