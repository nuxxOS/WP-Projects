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


  jQuery(".cat-item").each(function() {                             // Računanje height-a za div sa slikom proizvoda
      var catHeight = $(this).height();                                  // Nađe height wrapera
      var catTitle =  jQuery(this).find('.cat-title').height();      // Pronađe height title diva
      var catImg = catHeight - catTitle - 40;                          // Oduzme ta dva height-a
      $(this).find('.cat-image').css({'height':catImg+'px'});        // dodjeli dobiveni iznos divu sa slikom
      console.log(catTitle);

  });

    
  jQuery(".featured-item").each(function() {                                    // Računanje visine diva sa slikom (feat image)
      var itemHeight = jQuery(this).height() - 50;                                // Pronalazi visinu diva sa .featured-item klasom
      jQuery(this).find('.featured-image').css({'height':itemHeight+'px'});       // dodaje height divu sa slikom

  });

  jQuery(".product-item").each(function() {                                    // Računanje visine diva sa slikom (feat image)
      var prodHeight = jQuery(this).height() - 40;                                // Pronalazi visinu diva sa .featured-item klasom
      jQuery(this).find('.product-image').css({'height':prodHeight+'px'});       // dodaje height divu sa slikom

  });


   jQuery('#play-video').on('click', function(ev) {
    jQuery("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
 
  });





  // ----- jQuery for menu items ----- //





  jQuery('.sign-up-background.bg-js').prependTo( jQuery('.menu-item-25') );

  jQuery('.sign-up-content-wrap.clearfix').prependTo( jQuery('ul#menu-primary-menu') );

  jQuery('.sign-up-sidebar-wrap.clearfix').prependTo( jQuery('ul#menu-primary-menu') );

  jQuery('a.request-link').appendTo( jQuery('#sidebar ul') );

  jQuery('.search-box').appendTo( jQuery('.search-box-wrap') );

  jQuery('.quantity-menu').appendTo( jQuery('.cart-menu') );



  // Search bar JS snipet //

  jQuery('.menu-search').on("click", function(){
    jQuery(this).parent().parent().find('.search-box').animate({width:'toggle'},750);
    jQuery(this).parent().find('span.menu-icon').addClass('not-visable');
    jQuery('.form-close').show();
  });



  jQuery(".form-close").on("click",function(){
    jQuery(".search-box").animate({width:'toggle'},750);
    jQuery('.form-close').hide();
    jQuery('span.menu-icon').removeClass('not-visable');
  });




  // User dropdown JS snipet //

  jQuery('.user').hover(function(){
    jQuery(this).parent().parent().find('.sign-up-background').toggleClass('yellow-hover');
  });


  jQuery('.user a').on("click", function(){
    if (jQuery('.sign-up-content-wrap').is(':hidden')) { 
      jQuery(this).parent().parent().find('.sign-up-content-wrap').slideDown(500);
    }
  }); 




  // Sign up JS snipet //

  jQuery('.cart-menu').on("click", function(){
    if (jQuery('.sign-up-sidebar-wrap').is(':hidden')) {  
      jQuery(this).parent().parent().parent().find('.sign-up-sidebar-wrap').slideDown(500);
    }
  });

  jQuery('.x-button').on("click", function(){
    jQuery(this).parent().slideUp(250);
  });






  jQuery('li.menu-item-language-current').on("click",function(){
    if (jQuery('ul.sub-menu.submenu-languages').is(':hidden')) {  
      jQuery(this).parent().parent().parent().find('ul.sub-menu.submenu-languages').slideDown(500);
    }
  });





  // Jquery for menu items not overlaping //

    jQuery(document).mouseup(function (e)
    {
      var container = jQuery(".sign-up-content-wrap, .sign-up-sidebar-wrap, ul.sub-menu.submenu-languages");

      if (!container.is(e.target) // if the target of the click isn't the container...
      && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
    container.slideUp(250);
    }
    });




    jQuery('.cat-title').hover(function(){
      jQuery(this).find('ul.menu').show();
    }, function(){
          jQuery(this).find('ul.menu').hide();
    });


    jQuery('li.main-menu-item').hover(function(){
      jQuery(this).find('ul.sub-menu').show(300);
    }, function(){
          jQuery(this).find('ul.sub-menu').hide(300);
    });




  // ----- End of menu items ----- //









  // ----- Footer ----- //



  jQuery(".footer-categories .product-item li a").mouseenter(function() {
     jQuery(this).parent().find('span').css('font-weight', '700').css('color','#f52830');
  }).mouseleave(function() {
        jQuery(this).parent().find('span').css('font-weight', '400').css('color','#000');
  });



  // ----- End of Footer JC snipet ----- //






  jQuery('.form-row input#place_order').hover(function(){
   var test = jQuery(this).parent();
   console.log(test);
  });




  jQuery('.featured-video .video-play a span').on("click",function(){
    jQuery('.video-play').addClass('disabled');
  });


  jQuery('#featured-slider .featured-item h5.view-details').hover(function(){
    var featID = jQuery(this).parent().parent().parent().parent().toggleClass('box-shadow-product');
    console.log(featID);
  });


  jQuery('#related-slider .product h5.view-details').hover(function(){
    jQuery(this).parent().parent().parent().parent().toggleClass('box-shadow-product');
  });





  

  jQuery('.product-wrap .product h5.view-details').hover(function(){
    jQuery(this).parent().parent().parent().toggleClass('box-shadow-product');
  });




  jQuery('.newsletter-signup .clear input.submit').hover(function(){
    jQuery(this).parent().find('.sign-up-background').toggleClass('yellow-hover');
  });


  jQuery('.see-products a.vise').hover(function(){
    jQuery(this).parent().find('.sign-up-background').toggleClass('yellow-hover');
  });


  jQuery('.woocommerce-checkout-payment .checkout-link input.button').hover(function(){
    jQuery(this);//.parent().find('.sign-up-background').toggleClass('yellow-hover');
  });


  jQuery('button.single_add_to_cart_button').hover(function(){
    jQuery(this).parent().find('.sign-up-background').toggleClass('yellow-hover');
  });





  jQuery('.reference-image .view-more').magnificPopup({
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
      tCounter: '<span class="mfp-counter">%curr%/%total%</span>',
      arrowMarkup: '<button title="%title%" type="button" class="icon-chevron-%dir% border"></button>',
      }   
  });



  jQuery('select').selectBox();

});









(function() {
 
  // store the slider in a local variable
  var $window = jQuery(window),
      flexslider;
 
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 900) ? 1 : 2;
  }
 
 
  jQuery(window).load(function() {
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
  jQuery(window).resize(function() {
    var gridSize = getGridSize();
 
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });
}());






(function() {
 
  // store the slider in a local variable
  var $window = jQuery(window),
      flexslider;
 
  // tiny helper function to add breakpoints
  function getGridSize() {
    return (window.innerWidth < 900) ? 1 : 2;
  }
 
 
  jQuery(window).load(function() {
    jQuery('#related-slider').flexslider({
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
  jQuery(window).resize(function() {
    var gridSize = getGridSize();
 
    flexslider.vars.minItems = gridSize;
    flexslider.vars.maxItems = gridSize;
  });

}());


    






