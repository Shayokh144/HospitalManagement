<?php
include ("data.php");
session_start();
$username=$_POST['username'];
$password=$_POST['password'];


select_data($username,$password);
function select_data($name,$pass)
{
	
	$sql="SELECT * FROM login ";
	//$sql="SELECT * FROM login WHERE username='$name'";
	$res=mysql_query($sql);
	if($res === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
	while($row = mysql_fetch_array($res))
	{
		
		if($row['username']==$name)
		{
			
		}
		else{
			$_SESSION["nameerror"] = "nameerror";
			header('Location:login_form.php');
		}
		
		
		
		if( $row['password']==$pass && $row['username']==$name )
		{
			$_SESSION['id']=$row['id'];
			
			if(isset($_POST['checkbox']))
			{
			
			setcookie("cook",$row['id'],time()+3600);
			}
			header('Location:admin.php');
			die();
			
		}
		if( $row['password']==$pass)
		{}
		else
		{
			$_SESSION["perror"] = "perror";
			header('Location:login_form.php');
		}
		
		
		
	}
	
}


?>