<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> V.F.C HOME_PAGE</title>
	<link rel="icon" href="Common/Images/HeaderIcons&Footer/Kingdom Foundation Logo.jpg" />
</head>
<body>
<div>

<?php 	require_once('Common/PhP/HeaderFiles.php'); ?>s
</div>
	
	<?php
	require_once('Common/PhP/header.php');
	require_once('Common/PhP/slider.php');
	?>

   <div class="container-fluid">
    <div class="row marquee-wraper" >
       
	<div class="marquee down marquee-down  col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p>A Place To be, home away from home.</p>
        <p>Home Of Glory and Excellence!.</p>
		
		
	</div>
	<div class="marquee up marquee-up col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p>Raising Foundations For Many Generations!.</p>
		<p>where everyone matters and is appreciated.</p>
		
    </div>
       </div>
    </div>
    
    
	<div class="container-fluid mini-content">
		<div class="row ">
		
	<div class="col-md-6 col-sm-12 amazingFavor">
	<img src="Common/Images/Testimonials/Amazing Favor.jpg" alt="2016 : Year of Amazing Favor" class="img-thumnail amazing-favor"/>
	</div>
	
	<div class="col-md-6 col-sm-12 testimonial">
	<?php
		require_once('Common/PhP/testimonial.php');
	?>
	</div>
	
		</div>
	</div>
	
	
	
	
	
	
	<?php
	require_once('Common/PhP/footer.php');
	require_once('Common/PhP/FooterFiles.php');
	?>
	
</body>
</html>
