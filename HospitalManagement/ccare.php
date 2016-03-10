








<!doctype html>
<html>
<head>
<title>hospital</title>
<meta charset="UTF-8" />
<link href="stylehome.css" rel="stylesheet" type="text/css"/>
<link href="css/hover.css" rel="stylesheet" media="all">
<script  src="jquery-2.1.3.min.js"></script>

<script type="text/javascript" >

 



$(document).ready(function(){
	
	//alert("sawdeq");
	$("#submit").click(function(){
var form2=$("#form1").serialize();
$.ajax({
type: "POST",
url: "commentprocess.php",
data: form2,
success: function(html)
{
$("#comment_show").html(html);
}
});
return false;
});

	
	
	
	
	
	
	
	
	
$('li').hover(function(){
    
	$(this).find('ul>li').stop().fadeToggle(400);
	 
  });
});
       
</script>
<br>
<marquee > <a class="em" href="emergency.php"><h2><font color="red">Emergency Contact??click here !!!</font></h2></a></marquee>

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
<div class="cform" id="outercomment">
<br>
<br>

<h1 style="text-align:center;"> Call us : 0468621<br><br>
</h1>
<h3 style="margin:15px;">Share your opinion so that we can enhance our facility.........<br><hr/>
</h3>
<div  id="h">



 <?php
 include ("data.php");
	  $sqll= "SELECT * FROM `comment`";
	  $rest= mysql_query($sqll) or die(mysql_error());
	  ?>
    
    <div id="comment_show">
    <?php
    while ($rows=mysql_fetch_assoc($rest)) {
	//$user_id= $rows['user_id'];
    ?>
    <div class="back">
    <div class="user"><span class="u"><b><?php echo $rows['name']; ?></b></span><span class="say">  says,</span><?php echo $rows['comment']; ?></div> 
     <div class="comm"><p></p></div>
	<div class="date"><p></p></div>
   
  </div>
    <?php
    } ?>
  </div>
  <form  id="form1">
			<br><br>
			 <textarea name="tarea" placeholder="Comments goes here..." cols="50" rows="2"  style="border-radius:8px; border-color: black;padding-left:10px; " id="tarea"></textarea>
<br><br>			
		Name:<input type="text" name="cname" id="cname" style="border-radius:8px;padding-left:10px; border-color: black;width:160px; height:25px; " required><br><br>	
		 <label for="cemail">Email:</label>
		<input type="email" name="cemail"   id="cemail" style="border-radius:8px; border-color: black;width:160px; height:25px; padding-left:10px;" ><br><br>	
		<input type="submit" name="submit" class="b" id="submit" style="border-radius:6px;width:90px; height:30px;border-color: black;color:black ;background-color:white;"  >
        </form>
		</div>
        </div>
</div>



</div>

</div>





</body>


</html>