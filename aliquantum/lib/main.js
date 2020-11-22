jQuery(document).ready(function($) {
    
	// calculate image size and set width of container based on that image size, due to content being wider than image
	$('#homeContBoxFour .sliderItem img').each(function(){
		var sliderImageWidth = $(this).width();
		$(this).parent('a').css('width', sliderImageWidth + 'px');
	});

	// calculate height of the image and set padding to text to center it
	$('.supportCont .aboutSection').each(function(){
		var aboutImageH = $(this).find('.aboutSectionImage').height();
		console.log(aboutImageH);
		var aboutTextH = $(this).find('.aboutSectionText').height();
		console.log(aboutTextH);
		var imageTextDiff = aboutImageH - aboutTextH;
		console.log(imageTextDiff);
		var divImageText = imageTextDiff / 2;
		console.log(divImageText);
		$(this).find('.aboutSectionText').css({'padding-top' : divImageText + 'px', 'padding-bottom' : divImageText + 'px'});
	});

	// count height and set padding to content section in box
	var parentDiv = $('#homeContBoxOne.boxFull, #homeContBoxThree.boxFull').height();
	var childDiv = $('#homeContBoxOne.boxFull .boxContentSection, #homeContBoxThree.boxFull .sectionMiddle').height();
	var diff = parentDiv - childDiv;
	var calcPadding = diff / 2;
	$('#homeContBoxOne.boxFull .boxContentSection, #homeContBoxThree.boxFull .sectionMiddle').css('padding-top', calcPadding + 'px');


	// slider - swiper (idangerous) - homepage boxone
	var mySwiperOne = new Swiper ('#homeContBoxTwo .swiper-container', {
	    // Optional parameters
	    loop: false,
	    slidesPerView: 4,
	    spaceBetween: 40,

	    
	    // Navigation arrows
	    nextButton: '.swiper-button-next',
	    prevButton: '.swiper-button-prev',
	    
	  })

	// slider - swiper (idangerous) - homepage boxthree
	var mySwiperTwo = new Swiper ('#homeContBoxThree .swiper-container', {
	    // Optional parameters
	    loop: false,
	    slidesPerView: 1,
	    spaceBetween: 0,
	    
	    // Navigation arrows
	    //nextButton: '.swiper-button-next',
	    //prevButton: '.swiper-button-prev',
	    
	    pagination: '.swiper-pagination',
	    paginationType: 'bullets',
	    paginationElement: 'span',
	    paginationClickable: 'true',
	  	paginationBulletRender: function (index, className) {
	  	    return '<span class="' + className + '">' + (index + 1) + '</span>';
	  	},


	  })

	// slider - swiper (idangerous) - homepage boxfour
	var mySwiperThree = new Swiper ('#homeContBoxFour .swiper-container', {
	    // Optional parameters
	    loop: false,
	    slidesPerView: 'auto',
	    freeMode: false,
	    spaceBetween: 40,

	    
	    // Navigation arrows
	    nextButton: '.swiper-button-next',
	    prevButton: '.swiper-button-prev',
	    
	  })


	// slider - swiper (idangerous) - homepage boxfive
	var mySwiperFour = new Swiper ('#homeContBoxFive .swiper-container', {
	    // Optional parameters
	    loop: true,
	    slidesPerView: 1,
	    freeMode: false,
	    spaceBetween: 0,
	    pagination: '.swiper-pagination',
	    paginationType: 'bullets',
	    paginationElement: 'span',
	    paginationClickable: 'true',
	      
	  });

	// slider - swiper ( idangerous ) - single product
	var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 20,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;

	// add active class on menu items
	var homeUrl = 'http://localhost/aliquantum/';
	if( document.URL == homeUrl ) {
		$('.homeLink').addClass("activeMenuItem");
	}else {
	    $('.mainMenu a').each(function(index) {
	        if(this.href.trim() == window.location)
	            $(this).addClass("activeMenuItem");
	    });
    }

    $('.smallNews:nth-child(4n), .newsPosts:nth-child(2n)').each(function(){
    	$(this).after('<span class="floatLFull divider"></span>');
    });


    // give class to item on page load
    $('.menu li a').each(function(index) {
        if(this.href.trim() == window.location)
            $(this).addClass("activePage");
    });

    // login, register, forgot pass
    $('.myAccountSection').click(function(){
    	$(this).find('.myAccount').css('color', '#47a951');
    	$(this).find('.person').addClass('hover');
   		$('.loginContent').slideDown();
   		$('.loginForm').slideDown();
   	});

   	$('.forgotPassLink a').click(function(){
   		$('.forgotPass').slideToggle();
   	});

   	$('.registerLink a').click(function(){
   		$('.loginForm').slideToggle();
   		$('.registerForm').slideToggle();

   	});

   	// cart header
   	$('.cartContentLink').click(function(){
   		$('.cartContent').slideDown();
   	});

   	// slide up parent div of element when clicked on "x"
   	$('.sectionClose').click(function(){
   		$(this).closest('div').slideUp();
   		$('.myAccountSection').find('.myAccount').css('color', '#555555');
   		$('.myAccountSection').find('.person').removeClass('hover');
   	});

 	// product page ( shop ) menu
 	$('.plusMinus').click(function() {
 		$(this).parent('li.menu-item-has-children').find('.sub-menu').slideToggle('400', function(){
 			if ($('.sub-menu').is(':visible'))
 			    {
 			            
 			        $(this).parent().find('.minus').css({'transform' : 'rotate(90deg)', 'transition' : 'all 0.3s ease-in-out'});
 			    }
 			else
 			    {
 			            
 			        $(this).parent().find('.minus').css({'transform' : 'rotate(0deg)', 'transition' : 'all 0.3s ease-in-out'});
 			    }
 		});
 		
 	});

 	// product page pagination next/previous backgrounds
 	$('.woocommerce-pagination a.next, .woocommerce-pagination a.prev').html('<span class="icon-chevron-down"><span>');


 	// select product filters
 	$("select.orderby, select.sortby").chosen()

 	// single product product solution edit

 	$('.productBanks').prependTo('.variations tr:first-of-type');
 	$('.productLicence').prependTo('.variations tr:nth-of-type(2)');
 	$('.productSolution').prependTo('.variations tr:nth-of-type(3)');
 	$('.productRefresh').prependTo('.variations tr:nth-of-type(4)');


 	// magnific popup, video

 	$('.productVideoContent > a').magnificPopup({
 		type: 'iframe',
 	});


 	jQuery('.menutoggle').click (function() {

    jQuery('.menumobile').toggleClass("menuoff");

    jQuery('.menutoggle').toggleClass("buttonmove");

    });


});