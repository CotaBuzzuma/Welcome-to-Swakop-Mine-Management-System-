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
      <div class="content">
        <h1>Search Records</h1>
		
       <form name="form1" method="post"  action="search_ac.php">
   <p> <label for="search">Search via</label>
     <select name="search" id="search"> 
<option value="st_name">NAME</option>
<option value="st_rollnumber">ROLL NUMBER</option>
<option value="visitor_id">STUDENT ID</option>
</select></p>
<p> <label for="search_content">type your Search query</label>
   <input name="search_content" type="text" id="search_content"  value="" />
     </p>
<input type="submit" style="font-face: 'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0; border: 3pt ridge lightgrey" value="Click here to Search" />
</form>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; 2017 Welcome to Swakop Mine Management System!!!! </p>
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
