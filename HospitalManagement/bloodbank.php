
<?php
session_start(); 
include ("data.php");

	
	
	$con=mysql_connect("localhost","asif","");
$sqb = "SELECT * FROM   blood_bank";
//$sq="SELECT * FROM donate_b  WHERE donate_id";
$resultb = mysql_query( $sqb);


if (mysql_num_rows($resultb) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($resultb)) 
	{

   
   $dap=$row["ap"];
   $dan=$row["an"];
   $dbp=$row["bp"];
   $dbn=$row["bn"];
   $dop=$row["op"];
   $don=$row["on"];
   $dabp=$row["abp"];
   $dabn=$row["abn"];
    }
} else {
    echo "0 results";
}

mysql_close($con);
	
	
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

<div class="bbemergencyinfo">
<br>
<br>
<center><p> <font color="red"><h2>call for blood : +88 02 8144488</h2></font> </p></center>
<div class="bbemerbox">

<center> 
 <table>
 <caption><h2>Reserved Blood<h2>
 </caption>
 <br>
 <tr>
 <td>
 <h3>Blood Group<h3>
 </td>
 <td><h3>Number of bags reserved<h3>
 </td>
 
 
 </tr>
 <tr>
 <td><p>A(pos)<p>
 </td>
 <td><p><?php    
echo $dap;
 ?><p>
 </td>
 </tr>
 
 <tr>
 <td><p>A(neg)<p>
 </td>
 <td><p><?php    
echo $dan;
 ?><p>
 </td>
 </tr>
 
 
 <tr>
 <td><p>B(pos)<p>
 </td>
 <td><p><?php    
echo $dbp;
 ?><p>
 </td>
 </tr>
 
 
 <tr>
 <td><p>B(neg)<p>
 </td>
 <td><p><?php    
echo $dbn;
 ?><p>
 </td>
 </tr>
 
 
 <tr>
 <td><p>O(pos)<p>
 </td>
 <td><p><?php    
echo $dop;
 ?><p>
 </td>
 </tr>
 
 
 
 <tr>
 <td><p>O(neg)<p>
 </td>
 <td><p><?php    
echo $don;
 ?><p>
 </td>
 </tr>
 
 
 
 <tr>
 <td><p>AB(pos)<p>
 </td>
 <td><p><?php    
echo $dabp;
 ?><p>
 </td>
 </tr>
 
 
 <tr>
 <td><p>AB(neg)<p>
 </td>
 <td><p><?php    
echo $dabn;
 ?><p>
 </td>
 </tr>
 
 
 
 
 
 
 </table>
 </center>

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



</body>


</html>