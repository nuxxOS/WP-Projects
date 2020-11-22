
/*
jQuery(document).ready(function($){
	$(".footer-img").each(function() {
		var footHeight = $(this).height();
		var footImg =  jQuery(this).find('img').height();
		var spaceImg = footHeight - footImg;
		var spaceHalf = spaceImg / 2;
		$(this).find('img').css({'padding-top':spaceHalf+'px'});	
		console.log(spaceHalf);
	})

  */


  jQuery(document).ready(function($){
    $('.slider').slick({
      	dots: false,
      	arrows: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        nextArrow: '<span class="icon-chevron-right border"></span>',
        prevArrow: '<span class="icon-chevron-left border"></span>',
           responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: false,
            dots: false,
            arrows: true,
          }
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            swipe: true,
            arrows: true
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            swipe: true,
            arrows: true
          }
        }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      })






    


  jQuery('#banner-slider').flexslider({
      animation: "fade",
      animationSpeed: 1200,
      slideshowSpeed: 3200,
      controlNav: false,
      animationLoop: true,
      slideshow: true,
      pauseOnAction: false,
      pauseOnHover: false,
      directionNav: true,
      prevText: "",
      nextText: "",
      after: function(slider) {
          if (!slider.playing) {
          slider.play();
          }
          },
      



      });



  $('.menutoggle').click (function() {

      $('.menumobile').toggleClass("menuoff");

  $('.menutoggle').toggleClass("buttonmove");

    });











jQuery('.projekt').magnificPopup({
       delegate: 'a',
       type: 'image',
       closeOnContentClick: false,
       closeBtnInside: false,
       mainClass: 'mfp-with-zoom mfp-img-mobile',
       image: {
           verticalFit: true,

       },
       gallery: {
           enabled: true,
       },
       zoom: {
           enabled: true,
           duration: 300, // don't foget to change the duration also in CSS
           opener: function(element) {
               return element.find('img');
           }
       }

    });


jQuery('.slick-img').magnificPopup({
       delegate: 'a',
       type: 'image',
       closeOnContentClick: false,
       closeBtnInside: false,
       mainClass: 'mfp-with-zoom mfp-img-mobile',
       image: {
           verticalFit: true,

       },
       gallery: {
           enabled: true,
       },
       zoom: {
           enabled: true,
           duration: 300, // don't foget to change the duration also in CSS
           opener: function(element) {
               return element.find('img');
           }
       }

    });


});   






  jQuery(window).load(function(){
  // store the slider in a local variable
  var $window = jQuery(window),
      flexslider;
 
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 600) ? 2 :
           (window.innerWidth < 698) ? 3 : 4;
  }
 

    jQuery('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 160,
      itemMargin: 20,
      move: 1,
      minItems: getGridSize(),
      maxItems: getGridSize(),
      directionNav: true,
      prevText: '<span class="icon-chevron-left border"></span>',
      nextText: '<span class="icon-chevron-right border"></span>',
      asNavFor: '#slider'

    });

    // check grid size on resize event
  $window.resize(function() {
    var gridSize = getGridSize();
 
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });

   
  jQuery('#slider').flexslider({
      animation: "fade",
      controlNav: false,
      animationLoop: false,
      slideshow: true,
      animationSpeed: 1500,
      slideshowSpeed: 4000,
      directionNav: false, 
      //sync: "#carousel"
  
  });

 });