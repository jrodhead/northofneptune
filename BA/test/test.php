<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>test page</title>
<script src="js/jquery.js"></script>
<script src="js/jquery_mobile.js"></script>
<script src="../js/fonts.js"></script>
<style>
* {-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}

html {background: #030a0f;
	background: -moz-radial-gradient(top left, ellipse cover,  #0d3049 0%, #030a0f 100%);
	background: -webkit-gradient(radial, top left, 0px, top left, 100%, color-stop(0%,#0d3049), color-stop(100%,#030a0f));
	background: -webkit-radial-gradient(top left, ellipse cover,  #0d3049 0%,#030a0f 100%);
	background: -o-radial-gradient(top left, ellipse cover,  #0d3049 0%,#030a0f 100%);
	background: -ms-radial-gradient(top left, ellipse cover,  #0d3049 0%,#030a0f 100%);
	background: radial-gradient(ellipse at top left,  #0d3049 0%,#030a0f 100%);
	background-repeat:no-repeat;background-attachment:fixed;}
body {color:#fff;font-family:economica,sans-serif;margin:0;overflow:hidden;}
header {font-size:2rem;text-align:center;}
header a {background:#030A0F;box-shadow:0 0 2px #fff;border-radius:.2rem;color:#fff;padding:.5rem;height:3rem;width:3rem;overflow:hidden;top:1%;position:fixed;z-index:10;}
header a span,header a span:before,header a span:after {background-color:#fff;border-radius:.2rem;display:block;transition:150ms;-webkit-transition:150ms;-webkit-backface-visibility:hidden;}
header a span {border-radius:.2rem;margin:0 auto;position:relative;top:12px;}
header a span:before,header a span:after {position:absolute;content:'';}

/*album-nav trigger*/
header a[href*="#album-nav"] {left:1%;}
header a[href*="#album-nav"] span,header a[href*="#album-nav"] span:before,header a[href*="#album-nav"] span:after {min-width:100%;max-width:100%;min-height:.5rem;max-height:.5rem;}
header a[href*="#album-nav"] span:before {margin-top:-12px;}
header a[href*="#album-nav"] span:after {margin-top:12px;}

/*user-nav trigger*/
header a[href*="#user-nav"] {right:1%;}
header a[href*="#user-nav"] span {min-height:1rem;max-height:1rem;min-width:.5rem;max-width:.5rem;}
header a[href*="#user-nav"] span:before {border-radius:100%;margin-left:-6px;margin-top:-13px;min-height:1.3rem;max-height:1.3rem;min-width:1.3rem;max-width:1.3rem;}
header a[href*="#user-nav"] span:after {border-radius:.2rem .2rem 0 0;min-height:.7rem;max-height:.7rem;margin-left:-11px;margin-top:9px;min-width:2rem;max-width:2rem;}

header a.gather span,
header a.gather span:before,
header a.gather span:after,
header a.active.gather span,
header a.active.gather span:before,
header a.active.gather span:after {border-radius:100%;margin:0 auto;max-width:.7rem;min-width:.7rem;max-height:.7rem;min-height:.7rem;}

header a.active span {background-color:transparent;min-width:100%;max-width:100%;border-radius:.2rem;}
header a.active span:before {transform:rotate(45deg);-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);}
header a.active span:after {transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);}
header a.active span:before,header a.active span:after {margin-left:0;min-width:100%;max-width:100%;min-height:.5rem;max-height:.5rem;margin-top:0;border-radius:.2rem;}

/*help trigger*/
header a[href*="#help"] {background:transparent;box-shadow:none;color:rgba(255,255,255,.8);text-decoration:none;z-index:12;}
header a[href*="#help"] span {top:0;-webkit-backface-visibility:hidden;}
header a[href*="#help"] span:before,header a[href*="#help"] span:after {top:12px;}
header a[href*="#help"] span,header a[href*="#help"] span:before,header a[href*="#help"] span:after {background:transparent;}
header a[href*="#help"].active span {background:transparent;color:transparent;}
header a[href*="#help"].active span:before,header a[href*="#help"].active span:after {background:#fff;}

nav ul {margin:0;padding:0;}
nav li {font-size:2rem;list-style:none;margin:0;padding:0 1rem;}
nav.album-nav,nav.user-nav,article.help,.contentwrap {bottom:0;position:fixed;top:0;overflow-y:auto;transition:300ms;-webkit-transition:300ms;}
.contentwrap {right:0;left:0;}
nav.album-nav,nav.user-nav {color:#ccc;}
nav.album-nav {left:0;}
nav.user-nav {right:0;}
nav.album-nav,nav.user-nav {padding-top:4rem;max-width:0;z-index:1;}
nav.album-nav.active,nav.user-nav.active {background:#333;max-width:90%;min-width:90%;}

.contentwrap {top:4rem;right:0;bottom:0;left:0;margin:5%;position:absolute;overflow:hidden;}
.contentwrap.inactive-left {left:90%;}
.contentwrap.inactive-right {right:90%;}
.contentwrap article {top:0;right:0;left:0;position:absolute;padding:2rem;transition:1s;-webkit-transition:1s;transform:translateX(100%);-webkit-transform:translateX(100%);-ms-transform:translateX(100%);z-index:10;}
.contentwrap .active {transform:translateX(0%);-webkit-transform:translateX(0%);-ms-transform:translateX(0%);}
.contentwrap article:nth-of-type(1) {background:aqua;}
.contentwrap article:nth-of-type(2) {background:gray;}
.contentwrap article:nth-of-type(3) {background:orange;}
.contentwrap article:nth-of-type(4) {background:lime;}
.contentwrap article:nth-of-type(5) {background:teal;}
.showarticle {position:absolute;padding:2rem;border-radius:.3rem;border:1px solid #ccc;z-index:1;}
.lyrics {display:none;}
article.help {background:rgba(0,0,0,0);position:fixed;top:0;right:0;bottom:0;left:0;transform:scale(0);-webkit-transform:scale(0);-ms-transform:scale(0);transition:500ms;-webkit-transition:500ms;-webkit-backface-visibility:hidden;}
article.help.active {background:rgba(0,0,0,.8);transform:scale(1);-webkit-transform:scale(1);-ms-transform:scale(1);z-index:11;}
</style>
</head>
<body>
<header>
	<a href="#album-nav" class="album-nav"><span></span></a>
	<a href="#help"><span>?</span></a>
	<a href="#user-nav" class="user-nav"><span></span></a>
</header>

<section class="contentwrap">
	<article class="active"><?php require("info/innerpeace.php");?></article>
	<article><?php require("info/girlnextdoor.php");?></article>
	<article><?php require("info/danielsoverbeam.php");?></article>
	<article><?php require("info/abilene.php");?></article>
	<article><?php require("info/lethergo.php");?></article>
</section>

<nav class="album-nav">
	<ul>
		<li>line1</li>
		<li>line2</li>
		<li>line3</li>
	</ul>
</nav>
<nav class="user-nav">
	<ul>
		<li>line1</li>
		<li>line2</li>
		<li>line3</li>
	</ul>
</nav>
<article class="help">
	dark transparent background that overlays and shows helpy things
</article>

<script>
$('a[href*="#album-nav"]').click(function () {
	$(this).addClass('gather');
	setTimeout( "jQuery('a.album-nav').removeClass('gather').toggleClass('active');",300 );
	$('nav.album-nav').toggleClass('active');
	$('.contentwrap').toggleClass('inactive-left').removeClass('inactive-right');
	$('.user-nav').removeClass('active');
});
$('a[href*="#user-nav"]').click(function () {
	$(this).addClass('gather');
	setTimeout( "jQuery('a.user-nav').removeClass('gather').toggleClass('active');",300 );
	$('nav.user-nav').toggleClass('active');
	$('.contentwrap').toggleClass('inactive-right').removeClass('inactive-left');
	$('.album-nav').removeClass('active');
});
$('a[href*="#help"]').click(function () {
	$(this).toggleClass('active');
	$('article.help').toggleClass('active');
});

var cw = $(".contentwrap article").width();
	$(".contentwrap article").css({
	"height": cw + "px"
});

$(".contentwrap article").on("swipeleft",function(){
	var nextarticle = $(this).next('article');
    $(this).removeClass('active').css('transform','translateX(-100%)');
    nextarticle.addClass('active').css('transform','translateX(0%)');
});

$(".contentwrap article").on("swiperight",function(){
	var prevarticle = $(this).prev('article');
    $(this).removeClass('active').css('transform','translateX(100%)');
    prevarticle.addClass('active').css('transform','translateX(0%)');
});

$(".contentwrap article").on("taphold",function(){
	$(".lyrics").slideToggle();
});

$(".showarticle").click(function() {
	$("article:first-of-type").addClass("active").css('transform','translateX(0%)');
});
</script>
 
</body>
</html>