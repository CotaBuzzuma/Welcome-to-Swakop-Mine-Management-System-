<!DOCTYPE HTML>
<html>

<head>
  <title>CSS3_seascape</title>
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
          <h1><a href="index.html">CSS3<span class="logo_colour">_seascape</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li><a href="page.html">A Page</a></li>
          <li class="selected"><a href="another_page.html">Another Page</a></li>
          <li><a href="#">Example Drop Down</a>
            <ul>
              <li><a href="#">Drop Down One</a></li>
              <li><a href="#">Drop Down Two</a>
                <ul>
                  <li><a href="#">Sub Drop Down One</a></li>
                  <li><a href="#">Sub Drop Down Two</a></li>
                  <li><a href="#">Sub Drop Down Three</a></li>
                  <li><a href="#">Sub Drop Down Four</a></li>
                  <li><a href="#">Sub Drop Down Five</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down Three</a></li>
              <li><a href="#">Drop Down Four</a></li>
              <li><a href="#">Drop Down Five</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New CICO System Launched</h4>
          <h5>Sept 10th, 2014</h5>
          <p>Check in Check Out System Design For Library. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="check_in.php">Check in</a></li>
            <li><a href="check_out.php">Check out</a></li>
            <li><a href="check_in_list.php">Currently Checked in User</a></li>
            <li><a href="current_day_report.php">Final Report Current Day</a></li>
			<li><a href="st_reg.php">New Student Registration</a></li>
            <li><a href="report_between_two_dates.php">Final Report Between Two Dates</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        <h1>Search Result</h1>
		
      <?php
	  //get value from form
	  $search=$_POST['search'];
	  echo $search;
	  $search_content=$_POST['search_content'];
	  $rollnumber='st_rollnumber';
	  $name='st_name';
	  $visitor='visitor_id';
	  

include('config2.inc');
$tbl_name="visitor_record"; // Table name 

$sql1 = "SELECT b.st_rollnumber,b.st_name,a.time_in, a.time_out FROM visitor_record a, st_detail b WHERE b.st_name='$search_content'";
$sql2 = "SELECT b.st_rollnumber,b.st_name,a.time_in, a.time_out FROM visitor_record a, st_detail b WHERE b.st_rollnumber='$search_content'";
$sql3 = "SELECT b.st_rollnumber,b.st_name,a.time_in, a.time_out FROM visitor_record a, st_detail b WHERE a.visitor_id='$search_content'";

if($search==$name)
{
$result=mysql_query($sql1);
}
if($search==$rollnumber)
{
$result=mysql_query($sql2);
}
if($search==$visitor)
{
$result=mysql_query($sql3);
}
?>

<table width="666" border="0" cellpadding="0" cellspacing="1" bgcolor="red">
<tr>
<td width="664" bordercolor="#00FF00" bgcolor="red">
<table width="654" border="1" cellspacing="0" cellpadding="3" bgcolor="#CC0033">
<tr>
<td colspan="4"><strong>these result finds from your query </strong> </td>
</tr>

<tr>

<td width="109" align="center" bgcolor="#00FF00"><strong>Roll Number</strong></td>
<td width="137" align="center"><strong>Name</strong></td>
<td width="164" align="center"><strong>Time in</strong></td>
<td width="210" align="center"><strong>Time out</strong></td>
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
      <p>Copyright &copy; 2014 <a href="http://www.grprajapat.blogspot.com">grprajapat.blogspot.com </a> | <a href="http://www.grprajapat.meximas.com">Developed By-Govind Prajapat. </a></p>
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
