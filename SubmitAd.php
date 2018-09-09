<!DOCTYPE html>
<html>
<head>
<title>Submit Ad-Studream</title>
<link rel="icon" type="image/jpg" href="images/studream.jpg" />
<meta name="description" content="Studream is an free online service which care the need of Students.Sell or Advertise to made Students life Easy.Books - HandWritten Notes - Tution - HomeFoodPoint - Music - Dance - PG - Hostels - Gym - Rent Room - Fest - Event - Workshop - Free Video Tutorials - Free Tutorials">
<meta name="keywords" content="free,book,submit ads,sell,buy,handwritten notes,notes,Classifieds,Used stuffs,ads,food,room,rent,tution classes,fitness,gym,school book,college book,competitive book">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
.post-ad-form {
    border: 1px solid #eee;
    padding: 40px;
    margin-bottom: 60px;
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
		<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="head">Post an Ad</h2>
			<div class="post-ad-form">
				<form method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="myForm">
					<label>Select Category <span>*</span></label>
					<span><select class="" name="category" required data-validation-required-message="Please fill your Ad Category!">
					  <option>Room For Rent</option>
					  <option>Competitive Books</option>
					  <option>College Books</option>
					  <option>School Books</option>
					  <option>HandWritten Notes</option>
					  <option>HomeFoodPoint</option>
					  <option>College Fest,Event And Workshop</option>
					  <option>Private Tution Classes</option>
					  <option>PG And Hostels</option>
					  <option>Fitness And Gym</option>
					  <option>Music And Dance Classes</option>
					  <option>Jobs And Internship</option>
					</select></span>
					<div class="clearfix"></div>
					<label>Ad Title <span>*</span></label>
					<span><input name="title" type="text" class="phone" placeholder="" required data-validation-required-message="Please write your Ad Title!" maxlength="70"></span>
					<div class="clearfix"></div>
					<label>Price<span></span></label>
					<span><input name="price" type="text" class="phone" placeholder=""></span>
					<div class="clearfix"></div>
					<label>Ad Description <span>*</span></label>
					<span><textarea name="des" class="mess" rows="9" cols="50" maxlength="1000" required data-validation-required-message="Please write your Ad Description!"></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Photos for your ad :</label>	
					 <input type="file" name="fileToUpload" id="fileToUpload" required data-validation-required-message="Please Upload your Product!">
					<div class="photos-upload-view">
						</div>
					<div class="clearfix"></div>
				</div>
					<div class="personal-details">
						<label>Your Name <span>*</span></label>
						<span><input name="name" type="text" class="name" required data-validation-required-message="Please write your Full Name!" maxlength="90"></sapn>
						<div class="clearfix"></div>
						<label>Location(City,State,Nation)<span>*</span></label>
					<span><input name="location" type="text" class="phone" required data-validation-required-message="Please write your Address!" maxlength="300"></textarea></span>
					<div class="clearfix"></div>
                     <label>Your Mobile No <span>*</span></label>
						<span><input name="mob" type="text" class="phone" required data-validation-required-message="Please write your Phone number!"></span>
						<div class="clearfix"></div>
						<label>Your Email Address<span>*</span></label>
						<span><input name="email" type="text" class="email" required data-validation-required-message="Please write your Email Address!"></span>
						<div class="clearfix"></div>
						
						<?php
	if(isset($_POST['Submit']))
{
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$disp=$_FILES["fileToUpload"]["name"];
			} else {
        echo "Sorry, there was an error uploading your file.";
    }	
	$username="id283963_studream_u431023663";
	$password="Aniket87555";
	$database="id283963_studream_u431023663";
	$server="localhost";
	$db_handle=mysqli_connect($server,$username,$password,$database);
	if(!$db_handle){
		die('Could not connect'.mysqli_connect_error());
		}
    mysqli_select_db($db_handle,$database);
	$sql="insert into submitad values('$_POST[price]','$_POST[category]','$_POST[title]','$_POST[location]','$_POST[des]','$_POST[price]','$_POST[name]','$_POST[mob]','$_POST[email]','".$disp."')";
	mysqli_query($db_handle,$sql);
	$sqlselect="select * from submitad";
	$var=mysqli_query($db_handle,$sqlselect);
	while($i=mysqli_fetch_array($var))
	{
		$id=$i[0];
		$Category=$i[1];
		$Title=$i[2];
		$Location=$i[3];
		$Description=$i[4];
		$Price=$i[5];
		$FullName=$i[6];
		$Mob=$i[7];
		$Email=$i[8];
		$pic=$i[9];
		}
}
}
?>	
						<input type="submit" value="Post" name='Submit'>					
					<div class="clearfix"></div>
					</form>
					</div>
			</div>
		</div>
	</div>
	<script>
 function validateForm() {
    var x = document.forms["myForm"]["price"].value;
    if (isNaN(x)) {
        alert("Please Enter Valid Price");
        return false;
    }
	var x = document.forms["myForm"]["name"].value;
    if (x<65||x>95||x<97||x>122) {
        alert("Please Enter Valid Name");
        return false;
    }
     var x = document.forms["myForm"]["mob"].value;
	if (isNaN(x)) {
        alert("Please Enter Your Valid Phone Number");
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
}  
</script>	 
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
					<li><a class="facebook" href="https://www.facebook.com/studream.in" target="_blank"><span>Facebook</span></a></li>
						<li><a class="twitter" href="https://twitter.com/StudreamCompany" target="_blank"><span>Twitter</span></a></li>
						<li><a class="flickr" href="https://www.facebook.com/studream.in" target="_blank"><span>Flickr</span></a></li>
						<li><a class="googleplus"href="https://plus.google.com/105880234246858093501" target="_blank"><span>Google+</span></a></li>
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