<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>V . F . C Photo Gallery</title>
<link rel="icon" href="Common/Images/HeaderIcons&Footer/Kingdom Foundation Logo.jpg" />
<?php require_once('Common/PhP/headerMini.php'); require_once('Common/PhP/sliderHeader.php');?>	
</head>

<body class="gallery-slider">
	
	
	<div id="gallery" style="display:none;">

		<a href="http://unitegallery.net">
		<img alt="Bishop Patrick Kariuki"
		     src="Common/Images/DSC_1729.JPG"
		     data-image="Common/Images/DSC_1729.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="The Glitters Service"
		     src="Common/Images/DSC_1317.JPG"
		     data-image="Common/Images/DSC_1317.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="The Feast Of Grace Conference 2016"
		     src="Common/Images/DSC_1663.JPG"
		     data-image="Common/Images/DSC_1663.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="Glitter Surprise"
		     src="Common/Images/DSC_1319.JPG"
		     data-image="Common/Images/DSC_1319.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="How Awesome things Were"
		     src="Common/Images/DSC_1324.JPG"
		     data-image="Common/Images/DSC_1324.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="Yea, Prophetic Coverage"
		     src="Common/Images/DSC_1638.JPG"
		     data-image="Common/Images/DSC_1638.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="Take a closer Look"
		     src="Common/Images/DSC_1675.JPG"
		     data-image="Common/Images/DSC_1675.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="Unimaginable, Humility Dominated"
		     src="Common/Images/DSC_1739.JPG"
		     data-image="Common/Images/DSC_1739.JPG"
		     style="display:none">
		</a>
		<a href="http://unitegallery.net">
		<img alt="Everyone Humbled B4 GOD"
		     src="Common/Images/DSC_1740.JPG"
		     data-image="Common/Images/DSC_1740.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="7 Year Prophetic Declaration"
		     src="Common/Images/DSC_1750.JPG"
		     data-image="Common/Images/DSC_1750.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="The Feast Of Grace Conference 2016"
		     src="Common/Images/DSC_1755.JPG"
		     data-image="Common/Images/DSC_1755.JPG"
		     style="display:none">
		</a>

		<a href="http://unitegallery.net">
		<img alt="And Finally!!!"
		     src="Common/Images/DSC_1319.JPG"
		     data-image="Common/Images/DSC_1319.JPG"
		     style="display:none">
		</a>

			 
	</div>
<?php require_once('Common/PhP/sliderFooter.php'); require_once('Common/PhP/footer.php'); ?>
	<script type="text/javascript" src="Common/Js/ug-theme-tiles.js" ></script>
	<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery("#gallery").unitegallery({
				tile_border_color:"#7a7a7a",
				tile_outline_color:"#8B8B8B",
				tile_enable_shadow:true,
				tile_shadow_color:"#8B8B8B",
				tile_overlay_opacity:0.3,
				tile_show_link_icon:false,
				tile_image_effect_type:"sepia",
				tile_image_effect_reverse:true,
				tile_enable_textpanel:true,
				lightbox_textpanel_title_color:"e5e5e5",
				tiles_col_width:230,
				tiles_space_between_cols:20				
			});

		});
		
	</script>


</body>
</html>
