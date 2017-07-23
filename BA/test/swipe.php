<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>swipe demo</title>
<script src="js/jquery.js"></script>
<script src="js/jquery_mobile.js"></script>
<style>
.contentwrap {top:0;right:0;bottom:0;left:0;position:absolute;overflow:hidden;}
.contentwrap article {top:0;right:0;bottom:0;left:0;position:absolute;padding:2rem;transition:1s;-webkit-transition:1s;transform:translateX(100%);-webkit-transform:translateX(100%);-ms-transform:translateX(100%);z-index:10;}
.contentwrap .active {transform:translateX(0%);-webkit-transform:translateX(0%);-ms-transform:translateX(0%);}
.contentwrap article:nth-of-type(1) {background:aqua;}
.contentwrap article:nth-of-type(2) {background:gray;}
.contentwrap article:nth-of-type(3) {background:orange;}
.contentwrap article:nth-of-type(4) {background:lime;}
.contentwrap article:nth-of-type(5) {background:teal;}
.showarticle {position:absolute;padding:2rem;border-radius:.3rem;border:1px solid #ccc;z-index:1;}
.lyrics {display:none;}
</style>
</head>
<body>

<section class="contentwrap">
	<article class="active"><?php require("info/innerpeace.php");?></article>
	<article><?php require("info/girlnextdoor.php");?></article>
	<article><?php require("info/danielsoverbeam.php");?></article>
	<article><?php require("info/abilene.php");?></article>
	<article><?php require("info/lethergo.php");?></article>
</section>

<a class="showarticle">show</a>

<script>
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