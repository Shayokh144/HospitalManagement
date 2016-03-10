
<!DOCTYPE html>
<html>
<head>

<script>
function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}

function validate_form(thisform)
{
var x = document.forms["myform"]["nationalid"].value;
if (x == null || x == "") {
alert("National Id must be filled out");
return false;
}


with (thisform)
  {
  if (validate_email(email,"Not a valid e-mail address!")==false)
    {email.focus();return false;}
  }
}

</script>

<title>hospital</title>



<style>
.error {color: #FF0000;}
</style>
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

<?php
session_start(); 
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST['name'])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
  
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
	 
	 if(!empty($_POST["email"]))
	 
	 {
	 
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
	 }
     
   


   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>





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
<li><a class="hvr-bounce-to-right " href="about.php">About</a>

</li>
<li><a href="appoinment.php" class="hvr-bounce-to-right">Appointment</a>

</li>
<li><a class="hvr-bounce-to-right" href="donateblood.php">Donate Blood</a>

</li>

<li>
<a class="hvr-bounce-to-right" href="contact.php">Contact</a>

</li>

<li>
<a href="login_form.php" class="hvr-bounce-to-right">Admit</a>
</li>
<li>
<a href="logout.php" class="hvr-bounce-to-right">Log in</a>
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
<marquee direction="up"><img src="pic/donateblood.jpg"></marquee>

</div>
<div class="donateform" id="df">
<div class="innerdonateform">

<br>
<br>
<h2>Registration form :</h2>
<br>
<br>
<p><span class="error"></span></p>
<form name="myform" method="post" action="after_register.php" onsubmit="return validate_form(this);"> 



    Name: <input  type="text" name="name" value="<?php echo $name;?>" >
   <span class="error"> <?php echo $nameErr;?></span>
   <?php
 if (isset($_SESSION['nameerror'])==true)
{
	echo '<p  ><font color="red">***name required</font></p>';
	session_destroy();
	
}
  ?>
   <br><br>
  
  
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error"><?php echo $genderErr;?></span>
     <?php
 if (isset($_SESSION['gerror'])==true)
{
	echo '<p  ><font color="red">***gender required</font></p>';
	
	
}
  ?>
   
   <br><br>
   
   Age: <input type="text" name="age" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   
    Address: <input type="text" name="address" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   
   
    National Id: <input type="text" name="nationalid" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   
   
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error"> <?php echo $emailErr;?></span>
   <br><br>
   
    Blood group : <input type="text" name="bgroup" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   
   <input type="submit" name="submit" value="Submit"> 
</form>

</div>
<div class="footer">
<br>
<br>
<br>
<b><p align="center">18F, Bir Uttam Qazi Nuruzzaman Sarak, West Dak-bangla, Khulna 905<br />
	Phone: (880-2) 8159457, 8142431, Mobile: 01713141447 (PABX), PABX for OPD Appointment: 2001, 2002 & 2018<br />
	24hr Emergency and Ambulance service: 8144466, 8144477, 8144488<br />
	ER Mobile: 01713377773-5, Fax: (880-2) 9118921, 9114342, email: info@Khulnahospital.com, web: www.Khulnahospital.com
	</p>
</b>
</div>





</div>

</div>





</body>


</html>