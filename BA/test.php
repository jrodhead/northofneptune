<!doctype html>
<html manifest="offline.manifest">
<head>
<meta charset="utf-8">
<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta name = "format-detection" content = "telephone=no">
<link rel="shortcut icon" href="favicon.ico" />
<title>The BA</title>
<script src="js/jquery.js"></script> <!-- local for offline use? -->
<script src="js/jquery_mobile.js"></script>
<script src="js/jquery.jplayer.min.js"></script>
<script src="js/jplayer.playlist.min.js"></script>
<script src="../js/fonts.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	new jPlayerPlaylist({
		jPlayer: "#audio_player",
		cssSelectorAncestor: "#player_container"
		},[
		{title:"Inner Peace",
			mp3:"music/innerpeace.mp3",
			oga:"music/innerpeace.ogg"},
		{title:"Girl Next Door",
			mp3:"music/girlnextdoor.mp3",
			oga:"music/girlnextdoor.ogg"},
		{title:"Daniels Over Beam",
			mp3:"music/danielsoverbeam.mp3",
			oga:"music/danielsoverbeam.ogg"},
		{title:"Abilene",
			mp3:"music/abilene.mp3",
			oga:"music/abilene.ogg"},
		{title:"Let Her Go",
			mp3:"music/lethergo.mp3",
			oga:"music/lethergo.ogg"},
	    ],{
		swfPath: "js",supplied: "oga, mp3"
	});
});
</script>
<style>@import url("css/ba.css");

.navigation {
  list-style: none;
  margin: 0; 
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-flow: row wrap;
  justify-content: space-around;
}

.navigation a {
  text-decoration: none;
  display: block;
  color: white;
}

</style>
</head>
<body>
<header>
	<ul class="navigation">
		<li><a class="album-nav"><span></span></a></li>
		<li><a class="help"><span>?</span></a></li>
		<li><a class="user-nav"><span></span></a></li>
	</ul>
</header>

<section class="contentwrap">
	<article class="active"><?php require("info/albumcover.php");?></article>
	<article><?php require("info/innerpeace.php");?></article>
	<article><?php require("info/girlnextdoor.php");?></article>
	<article><?php require("info/danielsoverbeam.php");?></article>
	<article><?php require("info/abilene.php");?></article>
	<article><?php require("info/lethergo.php");?></article>
	<article><?php require("info/credits.php");?></article>
</section>

<?php require("includes/album-nav.php");?>
<?php require("includes/user-nav.php");?>
<?php require("includes/help.php");?>

<div id="audio_player" class="jp-jplayer"></div>
<div id="player_container" class="jp-audio">
 <nav class="jp-type-playlist">
  <div class="jp-gui jp-interface">
   <ul class="jp-controls">
    <li class="jp-current-time"></li>
    <li><a href="javascript:;" class="jp-previous">prev</a></li>
    <li><a href="javascript:;" class="jp-play">play</a>
     <a href="javascript:;" class="jp-pause">pause</a></li>
    <li><a href="javascript:;" class="jp-next">next</a></li>
    <li class="jp-duration"></li>
    <li>Song List</li>
   </ul>
  </div>
  <div class="jp-playlist">
   <ul>
    <li></li>
   </ul>
  </div>
  <div class="jp-no-solution">
  <span>Update Required</span>
  To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
  </div>
 </nav>
</div>

<script src="js/ba.js"></script>

</body>
</html>