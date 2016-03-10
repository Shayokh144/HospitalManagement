<?php
session_start();



if (isset($_SESSION['id'])==true)
{
	header('Location:admin.php');
}
if(isset($_COOKIE['cook'])==true){
	$_SESSION['id'] = $_COOKIE['cook'];
	header('Location:admin.php');
}

?>
<!DOCTYPE html>

<html>
<head>
<title>hospital</title>
<link href="stylehome.css" rel="stylesheet" type="text/css"/>
<link href="css/hover.css" rel="stylesheet" media="all">
<script  src="jquery-2.1.3.min.js"></script>



<br>
<marquee > <a class="em" href=""><h2><font color="red">Emergency Contact??click here !!!</font></h2></a></marquee>

<link rel="stylesheet" type="text/css" href="all.css">
		
<script type="text/javascript">




function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
	
	
	 var y = document.forms["myForm"]["password"].value;
    if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
	
	 if ((y == null || y == "")&&(x == null || x == "")) {
        alert("name and Password must be filled out");
        return false;
    }
	
	
	
	$(document).ready(function(){
$('li').hover(function(){
    
	$(this).find('ul>li').stop().fadeToggle(400);
	 
  });
});

}
</script>

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body >





<div class="main">
<div class="header">
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
<li><a class="hvr-bounce-to-right" href="donateblood.php">Donate Blood</a>

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
<div class="donateform">




<div id="main">
<div id="login">
<h2>Login Form for Admin</h2>
<form name="myForm" action="after_login.php" method="post" onsubmit="return validateForm()">
<br>
<label><font color="black">UserName :</font></label>
<input id="name" name="username" placeholder="username" type="text" >
<?php
 if (isset($_SESSION['nameerror'])==true)
{
	echo '<p  ><font color="red">***name not matched</font></p>';
	session_destroy();
	
}
  ?>

<label><font color="black">Password :</font></label>
<input id="password" name="password" placeholder="**********" type="password" >
 <?php
 if (isset($_SESSION['perror'])==true)
{
	echo '<p  ><font color="red">***password not matched</font></p>';
	
	
}
  ?>
<input type="checkbox" name="checkbox">
<label><font color="white">keep logged in</font></label>
<input name="submit" type="submit" value=" Login ">

</form>
</div>
</div>



</div>

</div>



</body>
</html>


