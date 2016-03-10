
<?php
session_start(); 
 if (isset($_SESSION['id'])==false)
{
header('Location:error.php');
}

	
	
?>










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
<marquee behavior="alternate"><img src="pic/name.png"></marquee>
<marquee ><h2><font color="green">Ready to help you always..........</font></h2></marquee>

</div>
<div class="mainmenu" >
<ul>
<li><a href="home.php" class="hvr-bounce-to-right">Home</a>


</li>
<li><a class="hvr-bounce-to-right ">About</a>

</li>
<li><a href="doc_infoupload.php" class="hvr-bounce-to-right">Add Doctor</a>

</li>
<li><a class="hvr-bounce-to-right" href="adminbloodbank.php">Blood Bank</a>

</li>

<li>
<a class="hvr-bounce-to-right">Contact</a>

</li>

<li>
<a href="adminsearch.php" class="hvr-bounce-to-right">Add Search</a>
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
<a href="adminnews.php"><li class="hvr-sweep-to-bottom " ><h2><i>Update News</i></h2>
</li></a>
<a href="adminevent.php"><li class="hvr-sweep-to-bottom "><h2><i>Update Events</i></h2></a>
</li>
<a href="home.php"><li class="hvr-sweep-to-bottom "><h2><i>Advertisement</i></h2></a>
</li>
<a href="adminnotice.php"><li class="hvr-sweep-to-bottom "><h2><i>Notice</i></h2></a>
</li>
<a href="adminpress.php"><li class="hvr-sweep-to-bottom "><h2><i>Press Realease</i></h2></a>
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

<br>
<br>
<br>
<h3 style="margin:17px;">Welcome Admin !!!!
</h3>



</div>

</div>





</body>


</html>