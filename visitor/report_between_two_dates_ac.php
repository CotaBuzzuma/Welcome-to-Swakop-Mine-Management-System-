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
              <li><a href="st_reg.php">New visitors Registration</a></li>
			   <li><a href="st_list.php">See All visitors</a></li>
            
            </ul>
          </li>
         
      </nav>
    </header>
    <div id="site_content">
      
      <div id="sidebar_container">
         
        <div class="sidebar">
       
        </div>
      </div>
	 // <?php 
	 $date1=$_POST['date1'];
$date2=$_POST['date2'];
?>
      <div class="content">
        <h1>Report Between </h1> <h2><?php echo $date1; ?> to <?php echo $date2; ?></h2>
		<?php
	//$date1=$_POST['date1'];
//$date2=$_POST['date2'];
	include('config2.inc');
	$sql = "SELECT a.checkin_id,b.st_rollnumber,b.st_name, a.time_in, a.time_out FROM visitor_record a, st_detail b WHERE b.visitor_id = a.visitor_id AND DATE(a.time_in) BETWEEN '$date1' AND '$date2' ORDER BY time_in";


$result=mysql_query($sql);
?>

<table width="666" border="0" cellpadding="0" cellspacing="1" bgcolor="red">
<tr>
<td width="664" bordercolor="#00FF00" bgcolor="red">
<table width="654" border="1" cellspacing="0" cellpadding="3" bgcolor="#CC0033">
<tr>
<td colspan="4"><strong>visitors List Which comes following date duration </strong> </td>
</tr>

<tr>

<td width="106" align="center" bgcolor="#00FF00"><strong>Roll Number</strong></td>
<td width="117" align="center"><strong>Name</strong></td>
<td width="139" align="center"><strong>Time in</strong></td>
<td width="139" align="center"><strong>Time out</strong></td>


</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><?php echo $rows['st_rollnumber']; ?></td>
<td><?php echo $rows['st_name']; ?></td>
<td><?php echo $rows['time_in']; ?></td>
<td><?php echo $rows['time_out']; ?></td>

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
      <p>Copyright &copy; 2017 Welcome to Swakop Mine Management System!!!! </a></p>
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
