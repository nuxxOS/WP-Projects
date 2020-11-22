jQuery(document).ready(function($) {




	jQuery('#home-slider').flexslider({
      animation: "fade",
      animationSpeed: 1200,
      slideshowSpeed: 2500,
      controlNav: true,
      animationLoop: true,
      slideshow: true,
      directionNav: true,
      prevText: '<span class="icon-chevron-left border"></span>',
      nextText: '<span class="icon-chevron-right border"></span>',
      after: function(slider) {
          if (!slider.playing) {
          slider.play(); 
          }
          },
    
  });


  jQuery(".product-item").each(function() {                             // Računanje height-a za div sa slikom proizvoda
      var prodHeight = $(this).height();                                  // Nađe height wrapera
      var prodTitle =  jQuery(this).find('.product-title').height();      // Pronađe height title diva
      var prodImg = prodHeight - prodTitle - 40;                          // Oduzme ta dva height-a
      $(this).find('.product-image').css({'height':prodImg+'px'});        // dodjeli dobiveni iznos divu sa slikom
      console.log(prodTitle);

  });



    
  jQuery(".featured-item").each(function() {                                    // Računanje visine diva sa slikom (feat image)
      var itemHeight = jQuery(this).height() - 50;                                // Pronalazi visinu diva sa .featured-item klasom
      jQuery(this).find('.featured-image').css({'height':itemHeight+'px'});       // dodaje height divu sa slikom

  });




  jQuery('#play-video').on('click', function(ev) {
 
    jQuery("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });


  jQuery('.reference-image').magnificPopup({
      delegate: 'a',
      type: 'image',
      closeOnContentClick: false,
      closeBtnInside: true,
      mainClass: 'mfp-with-zoom mfp-img-mobile',
      image: {
      verticalFit: false,

      },
      gallery: {
      enabled: true,
      navigateByImgClick: true,
      tCounter: '<span class="mfp-counter">%curr% / %total%</span>',  // markup of counter
      arrowMarkup: '<button title="%title%" type="button" class="icon-chevron-%dir% border"></button>' // markup of an arrow button
      },
      zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
      return element.find('img');
      }
    }
    
  });






(function() {
 
  // store the slider in a local variable
  var $window = $(window),
      flexslider;
 
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 900) ? 1 : 2;
  }
 
  jQuery(function() {
    SyntaxHighlighter.all();
  });
 
  $window.load(function() {
    jQuery('#featured-slider').flexslider({
      animation: "slide",
      animationLoop: false,
      controlNav: false,
      itemWidth: 210,
      itemMargin: 30,
      minItems: getGridSize(), // use function to pull in initial value
      maxItems: getGridSize(), // use function to pull in initial value
      prevText: '<span class="icon-chevron-left border"></span>',
      nextText: '<span class="icon-chevron-right border"></span>'
    });
  });
 
  // check grid size on resize event
  $window.resize(function() {
    var gridSize = getGridSize();
 
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });
}());


    
});





