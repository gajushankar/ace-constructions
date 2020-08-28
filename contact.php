<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Us | ACE Contruction Company - New Delhi</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Contact Us | ACE Contruction Company - New Delhi" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!-- for favicon -->

<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">


<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- =======================================================
    Author: SJK Technologies Pvt Ltd
    Author URL: http://sjktechnologies.com
======================================================= -->

</head>
<body>


<div id="wrapper">
	<!-- start header -->
	<?php include('header.php'); ?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12"> 
				<div class="col-md-8">
				    <div class="map">
				    	<div id="google-map" data-latitude="28.672990" data-longitude="77.099492"></div>
				    </div>

				</div>
				<div class="col-md-4">
					<h2>Contact Us</h2>
					<hr class="colorgraph">
					<h4>ACE Construction Company</h4>
						<p>A-2/114, Paschim Vihar West</p>
						<p>New Delhi - 110063</p>
						<p>Mobile : +(91)-9871111091 </p>
						<p>Email : ace9construction@gmail.com</p>
				</div>
			</div>
		</div>
	</div>
	</section>
<!-- footer section -->
	<?php include('footer.php'); ?>
	<!-- end of footer section -->
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtMhfapxL8aQooXjNXMmAFOreGDa1pECY&callback=initMap"
  type="text/javascript"></script> 		<!-- replace with clients key -->
<!-- <script src="https://maps.google.com/maps/api/js?sensor=false"></script> -->
<script src="js/custom.js"></script>
<script>
jQuery(document).ready(function( $ ) {
    
    //Google Map
    var get_latitude = $('#google-map').data('latitude');
    var get_longitude = $('#google-map').data('longitude');

    function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize_google_map);
    
});
</script>

<script src="contactform/contactform.js"></script>
	
</body>
</html>