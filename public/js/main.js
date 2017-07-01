/*-----------------------------------------
Template Name: Brief 
Author: Beeskip
Author URI: https://themeforest.net/user/beeskip
Version: 1.0
Desciption: is simple Template blog for bloging elgante built by last thechnologie like Last bootstrap,css,HTML,JQuery
Tag: blog,template,blog wordpress,bloging,theme

------------------------------------------------*/

jQuery(document).ready(function(){
	
  "use strict"; 
  
   /*---------------------------------------
     Stiky Menu 
    -------------------------------------------*/
    $(window).bind('scroll', function() {
        if ($(window).scrollTop()) {
            $('.navbar-default').addClass('navbar-fixed-top');
        } else {
            $('.navbar-default').removeClass('navbar-fixed-top');
        }
    });
	
	 
	/*------------------------
		Scroll to Top
	----------------------------------*/

    (function() {
	"use strict";

	var docElem = document.documentElement,
		didScroll = false,
		changeHeaderOn = 550;
		document.querySelector( '#back-to-top' );
	function init() {
		window.addEventListener( 'scroll', function() {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 50 );
			}
		}, false );
	}
	
   })();
   
   $(window).scroll(function(event){
	var scroll = $(window).scrollTop();
	if (scroll >= 50) {
	    $("#back-to-top").addClass("show");
	} else {
	    $("#back-to-top").removeClass("show");
	}
});

$('a[href="#top"]').on('click',function(){
    $('html, body').animate({scrollTop: 0}, 'slow');
    return false;
});

});

  
	 /*------------------------------
    Preloader
    --------------------------------------*/
	
  	$(window).on( 'load',function() {

   	// will first fade out the loading animation
    	$("#status").fadeOut("slow");

    	// will fade out the whole DIV that covers the website.
    	$("#preloader").delay(500).fadeOut("slow").remove();

  	}) ;