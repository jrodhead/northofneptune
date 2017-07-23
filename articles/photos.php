<!DOCTYPE html>
<?php require("includes/header.php"); ?>
<script src="includes/login_slider.js" type="text/javascript"></script>

<link media="screen" rel="stylesheet" href="../css/colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
<script src="../js/jquery.colorbox.js"></script>
<script>
	$(document).ready(function(){
		$("a[rel='non_photos']").colorbox({rel:'non_photos'});
	});
</script>
<?php require("includes/nav.php"); ?>
<div id="photos" align="center">

<div id="thumbnail-container">
	<ul class="thumbnails">
		<li><a href="images/IMG_9557.jpg" rel="non_photos" title="January 9, 2011 | 1 of 3">
			<img src="images/IMG_9557.jpg" width="225px">
		</a></li>
		<li><a href="images/IMG_9592.jpg" rel="non_photos" title="January 9, 2011 | 2 of 3">
			<img src="images/IMG_9592.jpg" width="225px">		
		</a></li>
		<li><a href="images/IMG_9667.jpg" rel="non_photos" title="January 9, 2011 | 3 of 3">
			<img src="images/IMG_9667.jpg" width="225px">		
		</a></li>
		<li id="colorbox-info"><h3 align="center">Slideshow brought to you by<br><a href="http://colorpowered.com/colorbox/">colorbox</a></h3></li>
	</ul>
</div>

<?php require("includes/footer.php"); ?>