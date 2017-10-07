<!DOCTYPE HTML>
<html>

<head>
  <title>Welcome to Swakop Mine Management System!!!!</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Welcome to Swakop Mine Management System!!!!</a></h1>
          <h2>Visitor Management System in mine</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
          
          <li><a href="check_in.php">Check in</a></li>
          <li><a href="check_out.php">Check Out</a></li>
		  <li><a href="check_in_list.php">Check in List</a></li>
          <li><a href="#">Others</a>
            <ul>
           
			  
            <li><a href="#">final report</a>
                <ul>
                  <li><a href="current_day_report.php">Current Day</a></li>
                  <li><a href="report_between_two_dates.php">Between Two Dates</a></li>
                  
                </ul>
              </li>
              <li><a href="st_reg.php">New visitor Registration</a></li>
			   <li><a href="st_list.php">See All visitor</a></li>
            
            </ul>
          </li>
         
      </nav>
    </header>
    <div id="site_content">
      
     
        <div class="sidebar">
         
        </div>
      </div>
      <div class="content">
        <h1>Check out Page</h1>
		<p><img src="images/checkout.jpg " alt="check in" height="100" width="642" /></p>
    <?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="lib_visitor"; // Database name 
$tbl_name="visitor_record"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$visitor_id=$_POST['visitor_id'];



// Insert data into mysql 
$sql="UPDATE $tbl_name SET time_out=NOW() WHERE visitor_id='$visitor_id' AND time_out='0000-00-00 00:00:00'";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "visitor Check out successfully ";
echo "<BR>";
echo "visitor id is $visitor_id";
echo "<BR>";

echo "<a href='check_out.php'>For another check out</a>";
echo "<BR>";
echo "<a href='index.php'>Back to home page</a>";
}

else {
echo "ERROR";
echo "<BR>";
echo "please check the party id or name";
echo "<BR>";
echo "<a href='party_reg.php'>try again</a>";

}
?> 

<?php 
// close connection 
mysql_close();
?>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; 2014 Welcome to Swakop Mine Management System!!!!</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
