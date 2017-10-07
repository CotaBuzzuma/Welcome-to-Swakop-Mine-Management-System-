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
        <h1>Check out Page</h1>
		<p><img src="images/checkout.jpg " alt="check in" height="100" width="642" /></p>
       <form name="form1" method="post"  action="check_out_ac.php">
  <table width="64%" height="153" border="0" cellpadding="3" cellspacing="1">
    <tr>
      <td height="47" colspan="3"><strong> Insert the bar code data in text field </strong></td>
    </tr>
    <tr>
      <td width="154" height="43">visitor id </td>
      <td width="15">:</td>
      <td width="183"><input name="visitor_id" type="text" id="visitor_id" /></td>
    </tr>
   
    <tr>
      <td height="24" colspan="3" align="center"><p>
          <input type="submit" name="Submit" value="Submit" />
      </p></td>
    </tr>
  </table>
</form>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; 2017| Welcome to Swakop Mine Management System!!!!</a></p>
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
