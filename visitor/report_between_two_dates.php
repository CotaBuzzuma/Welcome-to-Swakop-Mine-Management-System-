<!DOCTYPE HTML>
<html>

<head>
  <title>Online Log Register(Visitor Management System www.grprajapat.blogspot.com)</title>
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
          <h1><a href="index.php">Online Log Register</a></h1>
          <h2>Visitor Management System in Library</h2>
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
              <li><a href="search.php">Search Student</a></li>
			  
            <li><a href="#">final report</a>
                <ul>
                  <li><a href="current_day_report.php">Current Day</a></li>
                  <li><a href="report_between_two_dates.php">Between Two Dates</a></li>
                  
                </ul>
              </li>
              <li><a href="st_reg.php">New Student Registration</a></li>
			   <li><a href="st_list.php">See All Students</a></li>
            
            </ul>
          </li>
          <li><a href="http://grprajapat.meximas.com/contact-us.html">Contact Us</a></li>
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
        <h1>Select Date page</h1>
		<p><img src="images/date_select.jpg " alt="check in" height="100" width="642" /></p>
       <form name="form1" method="post"  action="report_between_two_dates_ac.php">
  <table width="64%" height="168" border="0" cellpadding="3" cellspacing="1">
    <tr>
      <td height="47" colspan="3"><strong> Plz select the date </strong></td>
    </tr>
    <tr>
      <td width="95" height="43">First Date </td>
	  
      <td width="15">:</td>
      <td width="297"><input name="date1" type="date" id="date1" /></td>
    </tr>
    <tr>
      <td height="43">Second Date </td>
      <td>:</td>
      <td><input name="date2" type="date" id="date2" /></td>
    </tr>
   
    <tr>
      <td height="24" colspan="3" align="center"><p><input type="submit" name="Submit" value="Submit" align="middle" />
          </p>
        </td>
    </tr>
  </table>
</form>
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
