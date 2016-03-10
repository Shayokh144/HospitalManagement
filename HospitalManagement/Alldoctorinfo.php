










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
<li><a class="hvr-bounce-to-right">Appointment</a>

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

<div class="alldoctorinfo">
<div class="inneralldoc">
<br>
<br>
<center><p> <font color="blue"><h2>All Doctors Info</h2></font> </p></center><br><br>
<div >


    <?php
	include ("data.php");

   // $sql = "SELECT * FROM `doc_img_up` WHERE `doctor_catagory` = 'Cardiology'";
	  $sql = "SELECT * FROM `doc_img_up` ";
    $result=mysql_query($sql);
    while ($row=mysql_fetch_array($result)) {
           
   ?>

  <div class="product">
  
     <div class="product-content"><h1><?php echo '<span style="color:blue">'. $row['doctor_name'] ?></h1></div><br/><br/>

    <div class="product-thumb"><img height="200" width="200" src="<?php echo $row['doctor_img'] ?>" />
    <br/><br/>
	<p class="product_price"><b>Email : </b><?php echo '<span style="color:blue">'. $row['doc_email'] ?></p><br/>

      <p class="product_price"><b>Department : </b><?php echo '<span style="color:blue">'. $row['doctor_catagory'] ?></p><br/>
      <p class="product_price"><b>Nationality : </b><?php echo '<span style="color:blue">'. $row['Nationality'] ?></p><br/>
	  <p class="product_price"><b>Visiting hour : </b><?php echo '<span style="color:blue">'.$row['doctor_visit'] ;?></p><br/>
	  <p class="product_price"><b>Degree : </b><?php echo '<span style="color:blue">'. $row['doctor_degree'] ?></p><br/>
	  <hr/><br/><br/>
  
  
    
  
  
	<?php } ?>



</div>
</div>
</div>
</div>
</div>


</body>
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


</html>