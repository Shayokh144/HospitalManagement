<?php
//echo $_GET['cname'] ;

include ("data.php");


$cname=$_POST['cname'];
$tarea=$_POST['tarea'];
$cemail=$_POST['cemail'];
$time=date("l  \of F Y h:i:s A");
//echo  $time;

 //$sql = "INSERT INTO comments(user_id,comment,time) VALUES(' $user_id','$status','$time')";
 $sql="INSERT INTO `comment`(`id`, `name`, `mail`, `comment`, `post_id`, `date`) VALUES ('',' $cname','$cemail','$tarea','','$time')";
 mysql_query($sql);
 //echo $cname;
 //echo $tarea;
 $sqll= "SELECT * FROM `comment`";
	  $rest= mysql_query($sqll) or die(mysql_error());
	   while ($rows=mysql_fetch_assoc($rest)) {
	    echo '<div class="back">';
	   echo '<div class="user"><span class="u"><b>'.$rows['name'].'</b></span><span class="say">' .'  says,'.'</span>'.$rows['comment'].'</div> ';
      // echo .'<hr/>'.'<br>';
	   echo '<div class="comm"><p></p></div>
	<div class="date"><p></p></div>'.'</div >';
	   }

?>
