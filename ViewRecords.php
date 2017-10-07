<?php

$host="localhost";
$user="root";
$pass="";
$dbc = mysql_connect("$host","$user","$pass");
if(!$dbc){
die("NOT CONNECTED:" . mysql_error());
}
//select database
$db_select =mysql_select_db("employee",$dbc);
if(!$db_select){
die("cant connect :" . mysql_error());
}

?>
 

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id staffid"); // mysql_query is deprecated
$result = mysql_query($mysql, "SELECT * FROM applyleave ORDER BY staffid DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>names</td>
		<td>staffid</td>
		<td>department</td>
		<td>reason</td>
        <td>period</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['names']."</td>";
		echo "<td>".$res['staffid']."</td>";
		echo "<td>".$res['department']."</td>";
        echo "<td>".$res['reason']."</td>";
        echo "<td>".$res['reason']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
