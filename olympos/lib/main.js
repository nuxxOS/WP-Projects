jQuery(document).ready(function($) {
	
	
	function calcDistance(lat1, lng1, lat2, lng2) {
		 var radlat1 = Math.PI * lat1 / 180;
		 var radlat2 = Math.PI * lat2 / 180;
		 var radlng1 = Math.PI * lng1 / 180;
		 var radlng2 = Math.PI * lng2 / 180;
		 var theta = lng1 - lng2;
		 var radtheta = Math.PI * theta / 180;
		 var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		 dist = Math.acos(dist);
		 dist = dist * 180 / Math.PI;
		 dist = dist * 60 * 1.1515;

		 dist = dist * 1.609344 *1000;

		 return dist.toFixed(0);
	} 

	$('.article').each(function() {
		var lng = $(this).attr('data-lng');
		var lat = $(this).attr('data-lat');
		var udaljenost = calcDistance(lat, lng, 45.3517482, 18.9846571);
		$(this).attr("data-udaljenost", udaljenost);
	});

	$('.sort .udaljenost').click(function() {
		$('.sort a').removeClass('active');
		$(this).addClass('active');
		var $wrapper = $('.clanci');
		$wrapper.find('.article').sort(function (a, b) {
				return +a.dataset.udaljenost - +b.dataset.udaljenost;
		})
		.appendTo( $wrapper );
		
		$('.article').each(function() {
			$(this).removeClass("last");
		});
		$('.article:odd').addClass("last");
	});

	$('.sort .a-z').click(function() {
		$('.sort a').removeClass('active');
		$(this).addClass('active');
		
		var $wrapper = $('.clanci');
		$wrapper.find('.article').sort(function (a, b) {
			return a.dataset.name > b.dataset.name;
		})
		.appendTo( $wrapper ); 
		
		$('.article').each(function() {
			$(this).removeClass("last");
		});
		$('.article:odd').addClass("last"); 
	});

	$('.datepicker .manifestacije').click(function() {
		$('.dogadjaji li').hide();
		$('.dogadjaji .manifestacije').show();
	});

	$('.datepicker .kultura').click(function() {
		$('.dogadjaji li').hide();
		$('.dogadjaji .kultura').show();
	});

	$('.datepicker .sport').click(function() {
		$('.dogadjaji li').hide();
		$('.dogadjaji .sport').show();
	});

	$('.datepicker .sajmovi').click(function() {
		$('.dogadjaji li').hide();
		$('.dogadjaji .sajmovi').show();
	});

	$('a.filter').click(function() {
		$('ul.zoomlist').hide();
		$('ul.filterlist').toggle();
	});

	$('a.zoom').click(function() {
		$('ul.filterlist').hide();
		$('ul.zoomlist').toggle();
	});
	
	
  jQuery('.iframelink, .popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({type:'iframe'});
  jQuery('.imglink').magnificPopup({type:'image'});
  jQuery('.inline').magnificPopup({type:'inline'});
  jQuery('.iframeform').magnificPopup({
    type:'iframe',
    mainClass:'booking'
  });
  jQuery('.formpopup').magnificPopup({type: 'inline'});
  jQuery('.zoomimg').magnificPopup({type: 'image', gallery:{enabled:true} });

});


jQuery(window).ready(function() {
 jQuery(".se-pre-con").fadeOut("slow");;
  
 jQuery('#slider').flexslider({    
    slideshow: true,
    animation: 'slide',
    directionNav: false,
    slideshowSpeed: 3000,
    controlsContainer: '.flex-container',
    controlNav: true
  });  
  

});
 