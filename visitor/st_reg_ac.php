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
          <h1><a href="index.html"><span class="logo_colour"></span></a></h1>
         
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.html">Home</a></li>
       
          
      </nav>
    </header>
    <div id="site_content">
      
      <div id="sidebar_container">
        
        <div class="sidebar">
         
        </div>
      </div>
      <div class="content">
        <h1>visitors Registration Page</h1>
		<p><img src="images/st_reg.jpg " alt="check in" height="100" width="642" /></p>
      <?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="lib_visitor"; // Database name 
$tbl_name="st_detail"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$visitor_id=$_POST['visitor_id'];
$st_name=$_POST['st_name'];
$st_rn=$_POST['st_rn'];
$st_year=$_POST['st_year'];



// Insert data into mysql 
$sql="INSERT INTO $tbl_name(visitor_id,st_name,st_rollnumber,st_year)VALUES('$visitor_id','$st_name','$st_rn','$st_year')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "visitors Deatils Added successfully ";
echo "<BR>";
echo "visitors id is $visitor_id";
echo "<BR>";
echo "<a href='st_reg.php'>insert another visitors Details</a>";
echo "<BR>";
echo "<a href='index.php'>Back to home page</a>";
}

else {
echo "ERROR";
echo "<BR>";
echo "please check the visitors id or name";
echo "<BR>";
echo "<a href='st_reg.php'>try again</a>";

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
