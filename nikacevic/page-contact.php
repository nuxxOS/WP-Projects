<?php
    
    /*Template name: Kontakt */

?>

<?php get_header(); ?>
		


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 17,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 17 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>


		<div class="kontakt-banner-wrapper container-full clearfix">
			<div class="banner-text">
				<h5><?php echo get_the_title(); ?></h5>
			</div>
		</div>





		<div class="kontakt-wrap container clearfix">

			<div class="kontakt-text-wrap left clearfix">
				<div class="kontakt-text">
					<h2><?php the_field('ime_tvrtke'); ?></h2>
				</div>

				<div class="kontakt-text">
					<h4><?php the_field('usluge_tvrtke'); ?></h4>
				</div>

				<div class="kontakt-text">
					<p><?php the_field('oib_tvrtke'); ?>: 00627456801  /  IBAN: HR69 2340 0091 1101 1364 4  /  SWIFT: PBZGHR2X  /  PBZ d.d.</p>
				</div>
			</div>


			<div class="kontakt-info-wrap left clearfix">
				<div class="kontakt-info left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png">
						<?php the_field('wysywig_location'); ?>
				</div>

				<div class="kontakt-info left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png">
						<?php the_field('wysywig_phone'); ?>
				</div>

				<div class="kontakt-info left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail.png">
						<a href="mailto:<?php the_field('wysywig_mail'); ?>"><?php the_field('wysywig_mail'); ?></a>
				</div>
			</div>

		</div>


		<div class="acf-map container-full">

		<?php
			$location = get_field('google_map');
			        if( !empty($location)):
			   ?>
                    
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    

			<?php endif;
			?>

		</div>



		<div class="kontakt-last container-full clearfix">
			<div class="container clearfix">
				<div class="kontakt-info left">
					<?php the_field('direktor'); ?>
				</div>

				<div class="kontakt-info left">
					<?php the_field('voditelj_prvi'); ?>
				</div>

				<div class="kontakt-info left">
					<?php the_field('voditelj_drugi'); ?>
				</div>
			</div>
		</div>





<?php get_footer(); ?>