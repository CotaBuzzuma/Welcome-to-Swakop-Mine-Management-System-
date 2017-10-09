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
      
      <div id="sidebar_container">
       
        <div class="sidebar">
        
        </div>
      </div>
      <div class="content">
        <h1>List of Registerd visitor</h1>
		<?php
	include('config2.inc');
	$sql = "SELECT * FROM st_detail ";
$result=mysql_query($sql);
?>

<table width="666" border="0" cellpadding="0" cellspacing="1" bgcolor="red">
<tr>
<td width="664" bordercolor="#00FF00" bgcolor="red">
<table width="654" border="1" cellspacing="0" cellpadding="3" bgcolor="#CC0033">
<tr>
<td colspan="4"><strong>Registerd visitor list </strong> </td>
</tr>

<tr>

<td width="106" align="center" bgcolor="#00FF00"><strong>visitor ID</strong></td>
<td width="117" align="center"><strong>visitor Name</strong></td>
<td width="139" align="center"><strong>visitor Roll Number</strong></td>
<td width="240" align="center"><strong>Year</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><?php echo $rows['visitor_id']; ?></td>
<td><?php echo $rows['st_name']; ?></td>
<td><?php echo $rows['st_rollnumber']; ?></td>
<td><?php echo $rows['st_year']; ?></td>

</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<?php
mysql_close();
?>
		
      </div>
    </div>
    <footer>
      <p>Copyright &copy; 2017 Welcome to Swakop Mine Management System!!!!</p>
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
