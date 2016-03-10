<?php

$con=mysql_connect("localhost","asif","");

if($con)
{
	
	mysql_select_db("mydb",$con);
}
?>