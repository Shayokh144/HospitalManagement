<?php
session_start(); 
include ("data.php");
//echo'<a href="home.php">home</a>';
if(isset($_GET['search_text']))
{
	 $search_text=$_GET['search_text'];
}

if(!empty($search_text))
{
if(mysql_select_db('mydb'))
{
	$query="SELECT * FROM   search WHERE `search_name`  LIKE'".mysql_real_escape_string($search_text)."%' ";
	$query_run=mysql_query($query);
	
	while($query_row = mysql_fetch_assoc($query_run))
	{
		//echo $name="Name: ".$query_row['search_name'].'<br>' ." Link : ".$query_row['search_link'].'<br>';
		//echo '<a href="<?php echo $query_row['search_link'];"></a>';
	//}
	
//}
//}

   ?>
<div style="text-color:black;margin-left:20px" id="searchinc">
 <h3><font color="black"><a href="<?php echo $query_row['search_link'];?>"><?php echo $query_row['search_name'];?></a></font></h3><br>
</div>
<?php
}
	
}
}

?>