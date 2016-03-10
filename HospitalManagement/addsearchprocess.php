<?php

session_start();
	include ("data.php" );


$keyword=$_POST['name'];
$link=$_POST['age'];


  //sql = "INSERT INTO `search`(`search_id`, `search_name`, `search_link`) VALUES ('','$keyword','$link')";
  // $sql="INSERT INTO `comment`(`id`, `name`, `mail`, `comment`, `post_id`, `date`) VALUES ('',' $cname','$cemail','$tarea','','$time')";
  
  
 if(mysql_query("INSERT INTO `search`(`search_id`, `search_name`, `search_link`) VALUES ('','$keyword','$link')")==true)
 
 {echo '<h2>successfully inserted<h2>';}
?>