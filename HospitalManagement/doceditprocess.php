<?php
session_start();
	include ("data.php" );

$doctor_name = $_POST['doctor_name'];
$doctor_email=$_POST['doctor_email'];
$doctor_degree = $_POST['doctor_degree'];

$doctor_visit=$_POST['doctor_visit'];
$Nationality=$_POST['Nationality'];
$doctor_post=$_POST['doctor_post'];
$job_type=$_POST['job_type'];
$doctor_address=$_POST['doctor_address'];

if(isset($_SESSION['doctor_id'])) {
		
        $doc_id= $_SESSION['doctor_id'];
		}
		else echo 'frwrfw';

$sqlll= "UPDATE `doc_img_up`  SET`doctor_id`='$doc_id', `doctor_name`='$doctor_name', `doc_email`='$doctor_email', `doctor_address`='$doctor_address', `Nationality`='$Nationality',  `doctor_degree`='$doctor_degree', `doctor_post`='$doctor_post', `job_type`='$job_type', `doctor_visit`='$doctor_visit'  WHERE `doctor_id` = '$doc_id'";   
mysql_query($sqlll);
header('Location:doctor_personal_prof.php');



?>