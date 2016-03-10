
<?php
session_start(); 
include ("data.php");

$ap = $_POST['ap'];
$an = $_POST['an'];
$bp = $_POST['bp'];
$bn = $_POST['bn'];
$op = $_POST['op'];
$on = $_POST['on'];

$abp = $_POST['abp'];
$abn = $_POST['abn'];
//
// UPDATE `blood_bank` SET `ap`='$ap',`an`='$an',`bp`='$bp',`bn`='$bn',`op`='$op',`on`='$on',`abp`='$abp',`abn`='$abn' 

 if(mysql_query(" UPDATE `blood_bank` SET `ap`='$ap',`an`='$an',`bp`='$bp',`bn`='$bn',`op`='$op',`on`='$on',`abp`='$abp',`abn`='$abn' "))
    {
		 $_SESSION["update"] = "update";
        header('Location:adminbloodbank.php');
    }

	
	
	

mysql_close($con);
	
	
?>
