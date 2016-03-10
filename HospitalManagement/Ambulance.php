
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

<div class="ambuemergencyinfo">
<br>
<br>
<center><p > <font color="red"><h2 id="callambulance">call for Ambulance : 01730011734</h2></font> </p></center>
<div class="ambuemerbox">


<h2>Ambulance Service
</h2>
<div style="margin: 0in 0in 0pt">Khulna Hospital Air &amp; Ground Ambulance Service&rsquo;s philosophy is to take the hospital to the patient and our state of the art air &amp; ground ambulances are the means of doing that as quickly as possible to any corner of Bangladesh. It is important to recognize that the Square Hospital air &amp; ground ambulances are the starting point of a total system of intensive care (including trauma care) which continues throughout the patients stay in Square Hospital and beyond.</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt"><strong>Facilities of Khulna Hospital Air &amp; Ground Ambulance Services:</strong></div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">24 hours a day, 7 days a week</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">Ground Ambulance Service: A fleet of total 6 ambulances, which includes state of the art Mercedes Benz Ambulances with all cardiac life support and ICU facilities</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">Square Air Ambulance Helicopter (a brand new Bell 407, USA): It has been specially adapted for its purpose, to enable patients to be treated to the standard of an intensive care unit in flight</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">The only fully functional Helipad on the roof of Square Hospital and an exclusive entrance to Emergency Department</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">Life support system of Khulna Hospital Air &amp; Ground Ambulance Services includes:</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">A team of specially trained emergency medical personnel which includes &ndash; doctors, paramedics and nurses.</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">The Air &amp; Ground Ambulance medical team is equipped with a substantial range of drugs, emergency surgical kits, life saving defibrillators &amp; monitors, pulse oximeter, medical gas etc.</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">The team of Khulna Hospital Air &amp; Ground Ambulance Services is fully capable of onsite trauma management with all the necessary equipments &amp; drugs so that the treatment can be started straightaway.</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt">&nbsp;</div>
<div style="margin: 0in 0in 0pt" class="rtecenter"><strong>For Khulna Hospital Ambulance, Call: +8801713377773,&nbsp;</strong><b>+88</b><strong>01713377775,&nbsp;</strong><b>+8802</b><strong>8144466,&nbsp;</strong><b>+8802</b><strong>8159457</strong></div>
<div style="margin: 0in 0in 0pt" class="rtecenter"><strong>(Ext &ndash; 2005)</strong></div>
<div style="margin: 0in 0in 0pt" class="rtecenter">&nbsp;</div>
<div style="margin: 0in 0in 0pt" class="rtecenter"><strong>For Khulna Hospital Air Ambulance, Call:&nbsp;</strong><b>+88</b><strong>01730011734,&nbsp;</strong><b>+8802</b><strong>8859007</strong></div>
<div style="margin: 0in 0in 0pt" class="rtecenter">&nbsp;</div>
<div>&nbsp;</div>
<p>&nbsp;</p>
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