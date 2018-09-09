<!DOCTYPE html>
<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
		$username="id283963_studream_u431023663";
	$password="Aniket87555";
	$database="id283963_studream_u431023663";
	$server="localhost";
	$db_handle=mysqli_connect($server,$username,$password,$database);
	mysqli_select_db($db_handle,$database);
	$sqlselect="select * from competitivebook where id=$id";
	$var=mysqli_query($db_handle,$sqlselect);
	$i=mysqli_fetch_array($var);
}
?>
<html>
<head>
<title>Preview</title>
<link rel="icon" type="image/jpg" href="images/studream.jpg" />
<meta name="description" content="">
<meta name="keywords" content="competitive book,books,sell,buy,iit,mains,medical,college">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<script src="js/easyResponsiveTabs.js"></script><meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/slides.min.jquery.js"></script>
<link rel="stylesheet" href="css/global.css">
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
<style>
#Post{
	background-color:#E96840;
	color:white;
	border:solid #E96840 ;
	padding:10px;
	float:right;
	font:15px Arial;
}
#product{
height:260px;
width:250px;
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
<div class="container">  		  <script>
  (function() {
    var cx = '001136984466447845863:hfhvqupvlrg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search></div>
	<div class="main">
    <div class="content">
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<img src="Uploads/<?php echo $i['pic']?>" alt=" " id="product"/></div>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
					<h2><?php echo $i['Title']; ?></h2>
					<p><?php echo $i['Description']; ?></p>				
					<div class="price" style="float:left">
						<p>Price: <span>Rs<?php echo $i['Price']; ?></span></p>
					</div>
			</div>
			<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fstudream.in/product3.php?id=<?php echo $i['id']; ?>&layout=button&size=large&mobile_iframe=true&width=72&height=28&appId" width="72" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
<iframe
  src="https://platform.twitter.com/widgets/tweet_button.html?size=l&url=http%3A%2F%2Fstudream.in/product3.php?id=<?php echo $i['id']; ?>&related=twitterapi%2Ctwitter&text=<?php echo $i['Title']; ?>&hashtags=Studream"
  width="72"
  height="28"
  title="Twitter Tweet Button"
  style="border: 0; overflow: hidden;"
  scrolling="no" frameborder="0" allowTransparency="true">
</iframe>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://studream.in/product3.php?id=<?php echo $i['id']; ?>" data-counter="right"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-href="http://studream.in/product3.php?id=<?php echo $i['id']; ?>"></div>
			<div class="clear"></div>
		  </div>
		  <center>
					<div class="product-desc" style="border:solid;border-width:1px">
    		<h3>Description</h3>
			</br>
			<p>Category => <span><?php echo $i['Category']; ?></span></p>	
			<p>Price => <span>Rs<?php echo $i['Price']; ?></span></p>
			<p>Location =><span><?php echo $i['Location']; ?></span></p>
			<p>Phone Number => <span><?php echo $i['Mob']; ?></span></p>
			<p>Email Address => <span><?php echo $i['Email']; ?></span></p>
</div>
</center>			
        </div>
				<div class="rightsidebar span_3_of_1">
						<h2>CATEGORIES</h2>
						<div id="image">
						<ul>
		             <li><a href="Rent.php" style="color:#2E86C1">Room For Rent</a></li>
				      <li><a href="Competitive-Book.php" style="color:#2E86C1">Competitive Books</a></li>
				      <li><a href="College-Book.php" style="color:#2E86C1">College Books</a></li>
				      <li><a href="School-Book.php" style="color:#2E86C1">School Books</a></li>
				      <li><a href="Handwritten-Notes.php" style="color:#2E86C1">HandWritten Notes</a></li>
				       <li><a href="HomeFoodPoint.php" style="color:#2E86C1">Home Food Point</a></li>
				   <li><a href="Event.php" style="color:#2E86C1">Fest,College Events and Workshops</a></li>
				    <li><a href="PrivateTution.php" style="color:#2E86C1">Private Tution Classes</a></li>
					 <li><a href="PGAndHostels.php" style="color:#2E86C1">PG and Hostels</a></li>
					  <li><a href="fitness&Gym.php" style="color:#2E86C1">Fitness and Gym Services</a></li>
					   <li><a href="Music&Dance.php" style="color:#2E86C1">Music and Dance Classes</a></li>
					   <li><a href="jobs&Internship.php" style="color:#2E86C1">Jobs and Internship</a></li>
					   </ul>
				</div>
 		</div>
		</div>
 	</div>
    </div>
	
	
 </div>
 <hr>
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