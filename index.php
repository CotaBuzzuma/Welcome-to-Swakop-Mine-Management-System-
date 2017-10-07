<?php

/*********************************************************************
* This script has been released with the aim that it will be useful.
* Written by Titus A. Amadhila
* Website: www.titusamadhila.info
* Email: titusamadhila92@gmail.info
* All Copy Rights Reserved by Titus A. Amadhila
***********************************************************************/

session_start();
if(isset($_SESSION['saved'])){
	$saved = $_SESSION['saved'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
  <meta charset="utf-20">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <script src="bootstrap/js/jquery-1.11.2.min.js"></script>  
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">			
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/slidecss.css">	
	<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
	<script type="text/javascript" src="js/image_slide.js"></script>		
</head>
<body>
 <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<div class="container" id="wrapper">
<header class="container">
	<div class="row">		
		<div class="col-md-12 col-lg-12 border">
			<div id="title">
				<h1 style="color: purple;">Welcome to Swakop Mine Management System!!!!</h1>
			</div>
		</div>
		<div class="col-md-6 col-lg-6">		
			
		</div>
	</div>
</header>
<nav class="navbar navbar-inverse" role="navigation">  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME</a></li>
        <li class="active"><a href="about.php">ABOUT THE SYSTEM </a></li>
        
      </ul>
      
           <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="dashboard.php"> Dashboard</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.php"> LOGIN</a></li>
      </ul>
    </div>
    </nav> 
 <?php if(isset($saved))echo $saved;?>
<div class="container" id="nopd">
			<div class="row border">
			<div class="col-lg-20 nopadding">
			<div class="slideshow">
		        <ul class="slideshow">
	              <li class="show"><img width="100%" height="80%" src="image/1.jpg" alt="EMPLOYEES TEACHING EACH OTHER" /></li>
	              <li><img width="100%" height="100%" src="image/2.jpg" alt="EMPLOYEE WORKING WITH SAND" /></li>
	              <li><img width="100%" height="80%" src="image/3.jpg" alt="EMPLOYEES BUSY WORKING" /></li>
	              <li><img width="100%" height="40%" src="image/4.jpg" alt="EMPLOYEE TEAM BUILDING" /></li>
	              <li><img width="100%" height="80%" src="image/5.jpg" alt="NEW EMPLOYEE BEING TAUGHT HOW TO USE A SYSTEM" /></li>
	              <li><img width="100%" height="70%" src="image/6.jpg" alt="EMPLOYEES AT WORKS" /></li>
	            </ul>
	        </div>
	         </div><!--col-lg-12 slideshow--> 
	      </div><!--close row--> 
</div><!-- content container-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<ul class="nav navbar-nav">
                     <li class="active"><a href="history.php">HISTORY</a></li>
                     <li class="active"><a  href="termsandconditions.php">TERMS AND CONDITIONS </a></li>               
                </ul>
			</div><!--col-sm-4 2-->
        <div class="sp-wrap sp-inner">

				<div class="cp">

								

				</div>
	
			</div>

		</div><!--row-->
		
	</div><!--endcontainer-->
</footer>
    <center>&copy; Swakop mine management system<?php echo date("Y"); ?> </center>
</div><!--end wrapper container-->
<!--importing login_modal-->
<?php
require 'modal/login_modal.php';
require 'modal/register_modal.php';
?>
</body>
</html>





