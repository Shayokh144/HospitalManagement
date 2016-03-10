<?php
include ("data.php");
session_start();
$name=$_POST['username'];
$pass=$_POST['password'];



	
	//$sql="SELECT * FROM login ";
	$sql="SELECT * FROM `doc_img_up` WHERE `doctor_id` ='$pass'";
	$res=mysql_query($sql);
	if($res === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
	while($row = mysql_fetch_array($res))
	{
		
		if($row['doctor_name']==$name)
		{
			
		}
		else{
			$_SESSION["nameerror"] = "nameerror";
			header('Location:doctorlogin.php');
		}
		
		
		
		if( $row['doctor_id']==$pass && $row['doctor_name']==$name )
		{
			$_SESSION['doctor_id']=$row['doctor_id'];
			
			if(isset($_POST['checkbox']))
			{
			
			setcookie("cook",$row['doctor_id'],time()+3600);
			}
			header('Location:doctor_personal_prof.php');
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
	



?>