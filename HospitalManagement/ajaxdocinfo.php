<?php
session_start(); 
include ("data.php");



$q = intval($_GET['q']);




$sql="SELECT * FROM `doctorinfo`  WHERE docid = '".$q."'";
$result = mysql_query($sql);

echo "<table>
<tr>
<th>Name</th>
<th>Degree</th>
<th>Department</th>
<th>Visiting hour</th>

</tr>";
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
if (mysql_num_rows($result) > 0) {
while($row = mysql_fetch_assoc($result)) {
    echo '<b>Infomation about selected Doctor :</b>';
	echo '<br>';
	echo '<br>';
	echo "<tr>";
    echo "<td>" . $row['docname'] . "</td>";
    echo "<td>" . $row['docdegree'] . "</td>";
    echo "<td>" . $row['docdept'] . "</td>";
    echo "<td>" . $row['doctime'] . "</td>";
   
    echo "</tr>";
}
}
echo "</table>";
mysql_close($con);
?>