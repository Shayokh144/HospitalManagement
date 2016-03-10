<?php
session_start(); 
include ("data.php");
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$address = $_POST['address'];
$bgroup = $_POST['bgroup'];
$gender = $_POST['gender'];
$nationalid=$_POST['nationalid'];
 $docname=$_POST['doc_name'];
 $time=$_POST['time'];



if (empty($_POST['name'])) 
     {
     $_SESSION["nameerror"] = "nameerror";
 header('Location:donateblood.php');
	 
   } 

 if (empty($_POST["gender"])) {
    $_SESSION["gerror"] = "gerror";
 header('Location:donateblood.php');
   }



//`app_id`, `name`, `gender`, `age`, `address`, `national_id`, `email`, `bgroup`, `docname`, `time`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])

$sql="INSERT INTO appoinment(name,gender,age,address,national_id,email,bgroup,`docname`, `time`) VALUES ('$name','$gender','$age','$address','$nationalid','$email','$bgroup','$docname','$time')";

mysql_query($sql);



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
<marquee direction="down"><img src="pic/donateblood.jpg"></marquee>

</div>
<div class="cmpletdonateform">
<div class="innercmpletdonateform"style="font-family: Arial, Helvetica, sans-serif;height:720px">
<br>
<br>
<h3>Registration Completed</h3>
<br>
<br>

<?php



$con=mysql_connect("localhost","asif","");

$sq = "SELECT * FROM appoinment  WHERE national_id='$nationalid'";
//$sq="SELECT * FROM donate_b  WHERE donate_id";
$result = mysql_query( $sq);




if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        echo  " Name: " . $row["name"]. "<br> ". "<br> "."Gender:" . $row["gender"]. "<br>". "<br> "."Age :".$row["age"]. "<br>". "<br> "."Address :".$row["address"]. "<br>". "<br> "."National Id :".$row["national_id"]. "<br>". "<br> "."Email :".$row["email"]. "<br>". "<br> "."Blood group :".$row["bgroup"]. "<br>". "<br> "."Doctor :".$row["docname"]."<br>". "<br> "."Appointment time:" . $row["time"]. "<br>". "<br> ";
    }
} else {
    echo "0 results";
}

mysql_close($con);
?>


</div>
<div class="footer">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<b id="dfooter"><p align="center">18F, Bir Uttam Qazi Nuruzzaman Sarak, West Dak-bangla, Khulna 905<br />
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