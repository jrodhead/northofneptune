//header navigation triggers
$('a.album-nav').click(function () {
	$(this).toggleClass('active');
	$('nav.album-nav').toggleClass('active');
	$('.user-nav').removeClass('active');
});
$('a.user-nav').click(function () {
	$(this).toggleClass('active');
	$('nav.user-nav').toggleClass('active');
	$('.album-nav').removeClass('active');
});
//attempt to consolidate header nav trigger js
//$('header a').click(function () {
//	var thisClass = $(this).attr('class').split(' ')[0];
//	$('.' + thisClass).toggleClass('active');
//	$('header a').not(this).removeClass('active');
//	$('nav').not(thisClass).removeClass('active');
//});

//nav accordions
$("nav ul lh").click(function () {
	var accordionTrigger = $(this).closest('ul');
	accordionTrigger.toggleClass('active');
	$("nav ul").not(accordionTrigger).removeClass('active');    
});
		
//article navigation
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

//toggle lyric display
$(".contentwrap article").on("taphold",function(){
	$(".lyrics").slideToggle();
});

//toggle song list
$('.jp-controls li:last-of-type').click(function () {
	$(this).toggleClass('active');
	$('.jp-playlist').toggleClass('active');
});
