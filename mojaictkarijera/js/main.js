jQuery(document).ready(function($){
    jQuery('#banner-slider').flexslider({
      animation: "fade",
      animationSpeed: 1200,
      slideshowSpeed: 10200,
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

    jQuery('.gallery-icon').magnificPopup({
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
      navigateByImgClick: true
      },
      zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
      return element.find('img');
      }
    }
    
  });



    jQuery(".table-row").each(function() { 
      var rowHeight = jQuery(this).height(); 
      jQuery(this).find('.block-left').css({'line-height':rowHeight+'px'});  

      });



    jQuery('#prijava-submit').click(function() {  //kad klikneš na #prijava-submit, on će ispraznit .file-name
      jQuery('.file-name').text('');

      });




    var control = $("#control");

    $("#clear").on("click", function () {
        control.replaceWith( control = control.clone( true ) );
    });




    jQuery('input[type=file]').change(function() { 
      var file = jQuery(this).val();
      var filename = file.replace(/^.*\\/, "");
      jQuery(this).parent().siblings(".file-name").text(filename);

    });



    jQuery('.cal-img').prependTo( jQuery('.post-date') );





    jQuery('.menutoggle').click (function() {

    jQuery('.menumobile').toggleClass("menuoff");

    jQuery('.menutoggle').toggleClass("buttonmove");

    });






});


   



  jQuery(window).load(function(){
  // store the slider in a local variable
  var $window = jQuery(window),
      flexslider;
 
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 414) ? 2 :
           (window.innerWidth < 480) ? 3 :
           (window.innerWidth < 790) ? 3 : 4;
  }
 

    jQuery('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 182,
      itemMargin: 21,
      move: 1,
      minItems: getGridSize(),
      maxItems: getGridSize(),
      directionNav: false,
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
      sync: "#carousel"
  
  });

});







