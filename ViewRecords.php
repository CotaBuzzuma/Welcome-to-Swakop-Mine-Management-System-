<?php

$connection = mysqli_connect('localhost', 'root', ''); //The Blank string is the password
mysqli_select_db($connection,'employee');

$query = "SELECT * FROM time_out"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

echo "<table>"; // start a table tag in the HTML

while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['time_out'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

//mysqli_close(); //Make sure to close out the database connection

?>