<head>
<script src="js/jquery.js"></script> <!-- local for offline use? -->
<script src="js/jquery_mobile.js"></script>
<script src="js/jquery.jplayer.min.js"></script>
<script src="js/jplayer.playlist.min.js"></script>
<script src="../js/fonts.js"></script>
<script type="text/javascript">
//<![CDATA[

$(document).ready(function(){

	// Local copy of jQuery selectors, for performance.
	var	my_jPlayer = $("#jquery_jplayer"),
		my_trackName = $("#jp_container .track-name"),
		my_playState = $("#jp_container .play-state"),
		my_extraPlayInfo = $("#jp_container .extra-play-info");

	// Some options
	var	opt_play_first = false, // If true, will attempt to auto-play the default track on page loads. No effect on mobile devices, like iOS.
		opt_auto_play = true, // If true, when a track is selected, it will auto-play.
		opt_text_playing = "Now playing", // Text when playing
		opt_text_selected = "Track selected"; // Text when not playing

	// A flag to capture the first track
	var first_track = true;

	// Initialize the play state text
	my_playState.text(opt_text_selected);

	// Instance jPlayer
	my_jPlayer.jPlayer({
		ready: function () {
			$("#jp_container .track-default").click();
		},
		timeupdate: function(event) {
			my_extraPlayInfo.text(parseInt(event.jPlayer.status.currentPercentAbsolute, 10) + "%");
		},
		play: function(event) {
			my_playState.text(opt_text_playing);
		},
		pause: function(event) {
			my_playState.text(opt_text_selected);
		},
		ended: function(event) {
			my_playState.text(opt_text_selected);
		},
		swfPath: "js",
		cssSelectorAncestor: "#jp_container",
		supplied: "oga, mp3",
		wmode: "window"
	});

	// Create click handlers for the different tracks
	$("#jp_container .track").click(function(e) {
		my_trackName.text($(this).text());
		my_jPlayer.jPlayer("setMedia", {
			mp3: $(this).attr("href")
		});
		if((opt_play_first && first_track) || (opt_auto_play && !first_track)) {
			my_jPlayer.jPlayer("play");
		}
		first_track = false;
		$(this).blur();
		return false;
	});
	
	// Create click handlers for 'next' button
	$("").click(function(e) {
		my_trackName.text($(this).text());
		my_jPlayer.jPlayer("setMedia", {
			mp3: $(this).attr("href")
		});
		if((opt_play_first && first_track) || (opt_auto_play && !first_track)) {
			my_jPlayer.jPlayer("play");
		}
		first_track = false;
		$(this).blur();
		return false;
	});

});
</script>
</head>
<body>
<div id="container">
	<div id="content_main">
		<section>
		<div id="jquery_jplayer"></div>

		<!-- Using the cssSelectorAncestor option with the default cssSelector class names to enable control association of standard functions using built in features -->

		<div id="jp_container">
			<ul>
				<lh>North of Neptune by North of Neptune</lh>
				<li><a href="music/innerpeace.mp3" class="track track-default">Inner Peace</a></li>
				<li><a href="music/girlnextdoor.mp3" class="track">Girl Next Door</a></li>
				<li><a href="music/danielsoverbeam.mp3" class="track">Daniels Over Beam</a></li>
				<li><a href="music/abilene.mp3" class="track">Abilene</a></li>
 				<li><a href="music/lethergo.mp3" class="track">Let Her Go</a></li>
			</ul>
			
			<p>
				<span class="jp-current-time"></span>
				<span class="extra-play-info">
					<h1 class="track-name">nothing</h1>
				<!--convert % to progress bar-->
				</span>
				<span class="jp-duration"></span>
			</p>
			<ul>
			    <li><a class="jp-previous" href="#">prev</a></li>
				<li>
					<a class="jp-play" href="#">Play</a>
					<a class="jp-pause" href="#">Pause</a>
				</li>
			    <li><a class="jp-next" href="#">next</a></li>
			</ul>
		</div>
		</section>
	</div>
</body>