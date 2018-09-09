<!DOCTYPE html>
<html>
<head>
<title>Feedback-Studream</title>
<link rel="icon" type="image/jpg" href="images/studream.jpg" />
<meta name="description" content="Studream is an free online service which care the need of Students.Sell or Advertise to made Students life Easy.Books - HandWritten Notes - Tution - HomeFoodPoint - Music - Dance - PG - Hostels - Gym - Rent Room - Fest - Event - Workshop - Free Video Tutorials - Free Tutorials">
<meta name="keywords" content="feedback,studream,contact,book,half price book">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/easyResponsiveTabs.js"></script>
<style>
#Post{
	background-color:#E96840;
	color:white;
	border:solid #E96840 ;
	padding:10px;
	float:right;
	font:15px Arial;
}
</style>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft">
				<h1><a href="index.php" style="color:#01a185"><span>Stu</span>dream</a></h1>
				</div>
				<div>		
				<a href="SubmitAd.php" id="Post">Submit Free Ad</a>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
						 <li><a href="index.html">Home</a></li>
							    <li><a href="index.php">Home</a></li>
							<li><a href="categories.html">Categories</a></li>
							<li><a href="HalfPriceBook.php">HalfPriceBooks</a></li>
							<li><a href="FreeTutorials.html">Free Tutorials</a></li>
							<li><a href="VideoTutorials.html">Video Tutorials</a></li>
							<li class="last"><a href="contact.php">Contact</a></li>
						</ul>
					 </div>			  
				</nav>
			</div>
		<div class="clearfix"> </div>			
		</div>
	</div>
</div>
	<div class="main-banner banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise <span class="segment-heading">Made Students </span>Life Easy</h1>
			<p>We Care The Need Of Students</p>
			<a href="SubmitAd.php">Post Free Ad</a>
	  </div>
	</div>
	<div class="feedback main-grid-border">
		<div class="container">
			<h2 class="head" style="color:#2E86C1">Feedback</h2>
			<div class="feed-back">
				<h3>Tell us what you think of us</h3>
				<div class="feed-back-form">
					</br><form method="post" name="myForm" onsubmit="return validateForm()">
							<span>FirstName</span>
							<span><input name="first" type="text" required data-validation-required-message="Please write your FirstName!" minlength=2 maxlength="60"></span>
						     <span>LastName</span>
							<span><input name="last" type="text" required data-validation-required-message="Please write your LastName!" minlength=2 maxlength="60"></span>
							<span>Email</span>
							<input name="email" type="text" required data-validation-required-message="Please write your Email Address!"></span>
					        <span>Phone Number</span>
							<span><input type="text"  name="mob" required data-validation-required-message="Please write your Phone number!" minlength=10 maxlength="10"></span>
							<span>Is there anything you would like to tell us?</span>
							<span><textarea type="text"  name="message" rows="8" cols="50" required data-validation-required-message="Please write a message!" minlength=4 maxlength="700"></textarea></span>
							<input type="submit" value="submit">
						</form>
			<script>
  function validateForm() {
    var x = document.forms["myForm"]["first"].value;
    if (x<65||x>95||x<97||x>122) {
        alert("Invalid FirstName");
        return false;
    }
	var x = document.forms["myForm"]["email"].value;
         atpos = x.indexOf("@");
         dotpos = x.lastIndexOf(".");
         if (atpos < 3 || ( dotpos - atpos < 6 )) 
         {
            alert("Please Enter correct email ID")
            return false;
         }
     var x = document.forms["myForm"]["mob"].value;
	if (isNaN(x)) {
        alert("Please Enter Your Valid Phone Number");
        return false;
    }
	var x = document.forms["myForm"]["last"].value;
	if (x<65||x>95||x<97||x>122) {
        alert("Invalid LastName");
        return false;
    }
}
</script>
	</div>
			</div>
		</div>	
	</div>
					<?php
	if(isset($_POST['Submit']))
{
	$uploadOk =1;
		$username="id283963_studream_u431023663";
	$password="Aniket87555";
	$database="id283963_studream_u431023663";
	$server="localhost";
	$db_handle=mysqli_connect($server,$username,$password,$database);
	if(!$db_handle){
		die('Could not connect'.mysqli_connect_error());
	}
	mysqli_select_db($db_handle,$database);
	$sql="insert into FeedBack values('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[mob]','$_POST[message]')";
	mysqli_query($db_handle,$sql);
	$sqlselect="select * from FeedBack";
	$var=mysqli_query($db_handle,$sqlselect);
	while($i=mysqli_fetch_array($var))
	{
		$FirstName=$i[0];
		$LastName=$i[1];
		$Email=$i[2];
		$Mob=$i[3];
		$Message=$i[4];
	}
}
?>
			<footer>
			<div class="footer-top">
				<div class="container">
					<div class="foo-grids">
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head" style="color:#E96840">Who We Are</h4>
						<p>Studream is an free online service which care the need of Students.</br>Sell or Advertise to made Students life Easy.</p>
					</div>
						 <div class="col-md-3 footer-grid">
							<h4 class="footer-head">Old Books in popular Cities</h4>
							<ul>
								<li><a href="city.php?City='Bangalore'">Bangalore</a></li>
								<li><a href="city.php?City='Hyderabad'">Hyderabad</a></li>
								<li><a href="city.php?City='Pune'">Pune</a></li>
								<li><a href="city.php?City='Mumbai'">Mumbai</a></li>
								<li><a href="city.php?City='Delhi'">Delhi</a></li>
								<li><a href="city.php?City='New Delhi'">New Delhi</a></li>
								<li><a href="city.php?City='Chennai'">Chennai</a></li>
								</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Quick Links</h4>
							<ul>
							 <li><a href="categories.html">Categories</li>
							<li><a href="Help.html">Help</li>
							<li><a href="faq.html">FAQ</a></li>
						    <li><a href="howitworks.html">How it Works</a></li>
							<li><a href="About.html">About us</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head" style="color:#E96840">Contact Us</h4>
							<address>		
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li>studream12@gmail.com</li>
									<div class="clearfix"></div>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="index.php"><span>Stu</span>dream</a>
				</div>
				<div class="footer-social-icons">
					<ul>
		<li><a class="Facebook" href="https://www.facebook.com/studream.in" target="_blank"><span>Facebook</span></a></li>
                         <li><a class="twitter" href="https://twitter.com/StudreamCompany" target="_blank"><span>Twitter</span></a></li>
                         <li><a class="flickr" href="https://www.facebook.com/studream.in" target="_blank"><span>Flickr</span></a></li>
                         <li><a class="googleplus" href="https://plus.google.com/105880234246858093501" target="_blank"><span>Google+</span></a></li>
                         <li><a class="dribbble" href="https://www.facebook.com/studream.in" target="_blank"><span>Dribbble</span></a></li>	
						 </ul>
				</div>
				<div class="copyrights">
					<p> © 2016 Studream. All Rights Reserved | Design by Studream</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</footer> 
</body>
</html>