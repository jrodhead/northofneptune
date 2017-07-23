$(document).ready(function(){	

//menu
	//add 'active' class to hamburger menu when clicked
	$('nav ul lh').click(function () {
		$('nav').toggleClass('active');
	});
	//toggle menu classes
	$('nav li.music').click(function () {
		$('.music').toggleClass('active');
		$('nav li').not(this).removeClass('active');
		$('article').not('.music').removeClass('active');
	});
	$('nav li.shows').click(function () {
		$('.shows').toggleClass('active');
		$('nav li').not(this).removeClass('active');
		$('article').not('.shows').removeClass('active');
	});
	$('nav li.press').click(function () {
		$('.press').toggleClass('active');
		$('nav li').not(this).removeClass('active');
		$('article').not('.press').removeClass('active');
	});
	$('nav li.connect').click(function () {
		$('.connect').toggleClass('active');
		$('nav li').not(this).removeClass('active');
		$('article').not('.connect').removeClass('active');
	});
	
});