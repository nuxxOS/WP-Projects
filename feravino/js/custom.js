


jQuery(document).ready(function($) {
		
	/*=======================================
	=            SLIDER FUNCTION            =
	=======================================*/

	function slider (element, slideNumberDesktop, slideNumberTablet, slideNumberMobile) {
		jQuery(element).slick({
			slidesToShow: slideNumberDesktop,
			arrows: true,
			infinite: false,
			responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: slideNumberDesktop
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: slideNumberTablet
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: slideNumberMobile
			      }
			    }
			  ]
		});
	}
	/*===================================
	=            HOME SLIDER            =
	===================================*/
	
	slider('#home-slider', 1, 1, 1);
	
	/*===================================
	=            HOME SLIDER            =
	===================================*/
	
	slider('.featured-wine-slider', 4, 2, 1);

	/*=========================================
	=            WINE LINES SLIDER            =
	=========================================*/
	
	slider('.wine-lines-slider', 3, 2, 1);

	/*=======================================
	=            PRODUCTS SLIDER            =
	=======================================*/
	
	slider('.products-slider', 4, 2, 1);
	
	/*=====  End of PRODUCTS SLIDER  ======*/
	

	/*=====================================
	=            SCROLL REVEAL            =
	=====================================*/
	
	var fooReveal = {
	  delay    : 200,
	  distance : '20px',
	  opacity  : 0,
	  scale       : 0.9,
	  easing   : 'ease-in-out',
	  viewFactor  : 0.2
	};

	window.sr = ScrollReveal()
  		.reveal( '.animate, .poat_item, .widget p, .widget-title, .gallery .gallery-item, .newsletter img, .newsletter h3, .newsletter form, .breadcrumbs, .page-content p, .featured-wine-slider, .contact ul, .contact input, .contact h2, .contact h3, .contact textarea', fooReveal )
	
	/*=====  End of SCROLL REVEAL  ======*/
	
	/*========================================
	=            GALLERY LIGHTBOX            =
	========================================*/
	
	var lightbox = $('.gallery a').simpleLightbox();
	
	/*=====  End of GALLERY LIGHTBOX  ======*/


	/*============================
	=            TABS            =
	============================*/

	$('#stores a').click(function(event) {
	  event.preventDefault();
	  $(this).tab('show')
	})

	/*===================================
	=            MOBILE MENU            =
	===================================*/
	
	var navTrigger = document.getElementsByClassName('nav-trigger')[0],
	  body = document.getElementsByTagName('body')[0];

	navTrigger.addEventListener('click', toggleNavigation);

	function toggleNavigation(e) {
	  e.preventDefault();
	  body.classList.toggle('nav-open');
	}

	$('.nav>li').click(function() {
		$(this).toggleClass('opened');
        $(this).children('.sub-menu').slideToggle();
	}); 
	
    
});
   