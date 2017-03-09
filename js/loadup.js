/**
* loadup.js
*
* Author     : metheno
* Date       : 2017/02/20
* Version    :
* Description:
*/

// Load theme components

hljs.initHighlightingOnLoad(); // highlight.js
aSpace(document.getElementsByClassName('blog-post')); // ASpace.js

// Hide .navbar-fixed-top on scroll

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.navbar-fixed-top').outerHeight();

$(window).scroll(function(event){
	didScroll = true;
});

setInterval(function() {
	if (didScroll) {
		hasScrolled();
		didScroll = false;
	}
}, 250);

function hasScrolled() {
	var st = $(this).scrollTop();

	// Ensure the hight is larger than derta (Math teacher is sooo good).
	if(Math.abs(lastScrollTop - st) <= delta)
		return;

	// If they scrolled down and are past the navbar, add class .nav-up.
	// This is necessary so you never see what is "behind" the navbar.
	if (st > lastScrollTop && st > navbarHeight){
		// Scroll Down
		$('.navbar-fixed-top').removeClass('nav-down').addClass('nav-up');
	} else {
		// Scroll Up
		if(st + $(window).height() < $(document).height()) {
			$('.navbar-fixed-top').removeClass('nav-up').addClass('nav-down');
		}
	}

	lastScrollTop = st;
}

// Optimize comments.php
$(document).ready(function(){
  $("#cancel-comment-reply-link").addClass("btn btn-transparent");
  $(".comment-list:first").css("padding-left", "0")
});
