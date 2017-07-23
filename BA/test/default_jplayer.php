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
<style>
* {-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}

body {background:#ccc;font-family:economica,sans-serif;margin:0;}
#player_container {bottom:0;position:fixed;width:100%;}
#player_container nav {margin:0;padding:0;}
#player_container nav li {cursor:pointer;list-style:none outside none;padding:.5rem;}

.jp-audio {}
.jp-controls {margin:0;padding:0;text-align:center;width:100%;}
.jp-controls li {display:inline-block;font-size:1rem;text-align:center;width:15%;}

.jp-playlist > ul {margin:0;padding:0;}
.jp-playlist {max-height:0;overflow:hidden;transition:.5s;-webkit-transition:.5s;}
.jp-playlist.active {max-height:200rem;}
.jp-playlist-item {width:100%;display:block;}
.jp-playlist-current {color:#fff;font-size:2rem;}
.jp-type-playlist .jp-playlist li.jp-playlist-current {background:green;}
</style>
</head>
<body>

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

<script>
$('.jp-controls li:last-of-type').click(function () {
	$(this).toggleClass('active');
	$('.jp-playlist').toggleClass('active');
});
</script>

</body>
</html>