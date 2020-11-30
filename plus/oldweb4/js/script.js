// Section Hide and Show

$(document).ready(function() {
	$(".flip").click(function() {
		$(".panel").slideToggle("slow");
	});
});

$(document).ready(function() {
	$(".flip2").click(function() {
		$(".panel2").slideToggle("slow");
	});
});

$(document).ready(function() {
	$(".flip3").click(function() {
		$(".panel3").slideToggle("slow");
	});
});

$(document).ready(function() {
	$(".flip4").click(function() {
		$(".panel4").slideToggle("slow");
	});
});

// Smooth Scrolling

$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top -50
		}, 1000);
		return false;
		}
	}
	});
});

