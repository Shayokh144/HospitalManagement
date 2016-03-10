

<?php
session_start(); 
 if (isset($_SESSION['id'])==false)
{
header('Location:error.php');
}

	
	
?>









<!doctype html>
<html>
<head>
<title>hospital</title>
<link href="stylehome.css" rel="stylesheet" type="text/css"/>
<link href="css/hover.css" rel="stylesheet" media="all">
<script  src="jquery-2.1.3.min.js"></script>

<script type="text/javascript" >

$(document).ready(function(){
$('li').hover(function(){
    
	$(this).find('ul>li').stop().fadeToggle(400);
	 
  });
});
       
</script>
<br>
<marquee > <a class="em" href=""><h2><font color="red">Emergency Contact??click here !!!</font></h2></a></marquee>

<link rel="stylesheet" type="text/css" href="all.css">
		

</head>

<body>






<div class="main">
<div class="header">
<a href="search.php" class="asearch"> <button type="button" class="searchbutton"><b>Search </b></button></a>
<marquee behavior="alternate"><img src="pic/name.png"></marquee>
<marquee ><h2><font color="green">Ready to help you always..........</font></h2></marquee>

</div>
<div class="mainmenu" >
<ul>
<li><a href="home.php" class="hvr-bounce-to-right">Home</a>


</li>
<li><a href="about.php" class="hvr-bounce-to-right ">About</a>

</li>
<li><a href="appoinment.php" class="hvr-bounce-to-right">Appointment</a>

</li>
<li><a class="hvr-bounce-to-right" href="adminbloodbank.php">Blood Bank</a>

</li>

<li>
<a class="hvr-bounce-to-right">Contact</a>

</li>

<li>
<a href="admit.php" class="hvr-bounce-to-right">Admit</a>
</li>
<li>
<a href="" class="hvr-bounce-to-right">Log in</a>
<ul>
<li><a href="login_form.php">Admin</a>
</li>
<li><a href="doctorlogin.php">Doctor</a>
</li>

</ul>
</li>

</ul>

</div>
<br>
<br>
<div class="Ucontent">

<div class="Umenu">
<br>
<h2> News & Events
</h2>
<br>
<ul>
<a href="news.php"><li class="hvr-sweep-to-bottom " ><h2><i>Current News</i></h2>
</li></a>
<a href="event.php"><li class="hvr-sweep-to-bottom "><h2><i>Upcoming Events</i></h2></a>
</li>
<a href="home.php"><li class="hvr-sweep-to-bottom "><h2><i>Advertisement</i></h2></a>
</li>
<a href="notice.php"><li class="hvr-sweep-to-bottom "><h2><i>Notice</i></h2></a>
</li>
<a href="press.php"><li class="hvr-sweep-to-bottom "><h2><i>Press Realease</i></h2></a>
</li>
<a href="h.php"><li class="hvr-sweep-to-bottom "><h2><i>Galery</i></h2></a>
</li>
<a href="logout.php"><li class="hvr-sweep-to-bottom "><h2><i>Log out</i></h2></a>
</li>
</ul>
</div>

<div class="donate">
<div  class="donatepic" >

</div>
<div class="donateform" id="admindoc">



<?php 
//include 'functions.php';
include ("data.php");

	
if  (!isset($_POST['submit']))  
{ 
?>

<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="docform">


						
<br><br>
								Doctor Name:<input type="text"  name="doctor_name" style="padding:5px 15px"  required><br><br>
								Doctor Email:<input type="email"  name="doctor_email" style="padding:5px 15px"  required><br><br>
								<select name="doctor_catagory" id="selectdoccat"style="color:blue;padding:5px 25px;margin:5px">
								 <option disabled selected>Select Category</option>
								 <option value="Cardiology" name="Cardiology">Cardiology</option>
								 <option value="Ent" name="Ent">Ent</option>
								 <option value="Dental" name="Dental">Dental</option>
								 <option value="Neurology" name="Neurology">Neurology</option>
								 <option value="Radiology" name="Radiology">Radiology</option>
								</select><br><br>

								<!--<tr><td><img src="images/drinks2.jpg" height="300px" width="300px"></td>	</tr> -->
								
							Degree:<input type="text"  name="doctor_degree" style="padding:5px 15px"  required><br><br>
							Nationality:<input type="text"  name="Nationality" style="padding:5px 15px"  required><br><br>
							Address:<input type="text"  name="doctor_address" style="padding:5px 15px"  required><br><br>
							Post:<input type="text"  name="doctor_post" style="padding:5px 15px"  required><br><br>
							Job type:<input type="text"  name="job_type" style="padding:5px 15px"  required><br><br>
								Visiting Hour:<input type="text"  name="doctor_visit" style="padding:5px 15px"  required><br><br>
							
								<!--<tr><td>upload an image:</td><td><input type="file" name="image_file" value="8000000"  style="padding:10px 45px"/></td></tr> -->
								Select image to upload:<input type="file" name="data"><br><br>
    									
								
								

								
									<input id="button" type="submit" name="submit"  value="Add to Database"/>
							

					
						</form>

<?php

} 



else
{

$doctor_name = $_POST['doctor_name'];
$doctor_email=$_POST['doctor_email'];
$doctor_degree = $_POST['doctor_degree'];
$doctor_catagory = $_POST['doctor_catagory'];
$doctor_visit=$_POST['doctor_visit'];
$Nationality=$_POST['Nationality'];
$doctor_post=$_POST['doctor_post'];
$job_type=$_POST['job_type'];
$doctor_address=$_POST['doctor_address'];

echo "file inserted succesfuuly";

if  ($_FILES['data']['size']  ==  0)
{

die("ERROR:  Zero  byte  file  upload");

}



$allowedFileTypes  =  array("image/gif",  "image/jpeg",  "image/pjpeg", "mage/png", "image/jpg");

if  (!in_array($_FILES['data']['type'],  $allowedFileTypes)) 
{

die("ERROR:  File  type  not  permitted");

} 

if  (!is_uploaded_file($_FILES['data']['tmp_name']))
{

die("ERROR:  Not  a  valid  file  upload"); 

}
$uploadDir  =  "./uploads/"; //  copy  the  uploaded  file  to  the  directory
move_uploaded_file($_FILES['data']['tmp_name'],  $uploadDir  .  $_FILES['data']['name'])  or  die("Cannot  copy  uploaded  file"); //  display  success  message
$doctor_img = "http://10.10.3.3/php/project/uploads/".$_FILES["data"]["name"];
//http://localhost/project3
//echo  "File  successfully  uploaded  to  "  .  $uploadDir  .$_FILES['data']['name']; 
//$sql= "INSERT INTO `food_info` VALUES('','$name','$cat','$price','$image_link') ";
//INSERT INTO `doc_img_up`(`doctor_id`, `doctor_name`, `doc_email`, `doctor_address`, `Nationality`, `doctor_catagory`, `doctor_degree`, `doctor_post`, `job_type`, `doctor_visit`, `doctor_img`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
$sql= "INSERT INTO `doc_img_up`(`doctor_id`, `doctor_name`, `doc_email`, `doctor_address`, `Nationality`, `doctor_catagory`, `doctor_degree`, `doctor_post`, `job_type`, `doctor_visit`, `doctor_img`) VALUES ('','$doctor_name','$doctor_email','$doctor_address','$Nationality','$doctor_catagory','$doctor_degree','$doctor_post','$job_type','$doctor_visit','$doctor_img')";   
mysql_query($sql);


}
?>




</div>

</div>





</body>


</html>