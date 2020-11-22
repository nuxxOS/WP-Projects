<?php
    
    /* Template name: Contact */

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
	    map.setZoom( 14 );
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





<!--	=======================================================
     	================== INFO AND CONTACT ===================
        =======================================================     -->


<div class="contact-us-wrap container clearfix">

	<div class="contact-us container-small clearfix">
		<h2 class="page-title"><?php _e('Kontaktirajte nas','stribor_kontakt')?></h2>

			<div class="contact-content-wrap clearfix">

				<div class="contact-info clearfix">

					<?php if( have_rows('contact_info_repeater') ):  ?>	
						<?php while( have_rows('contact_info_repeater') ): the_row(); ?>

							<ul class="clearfix">

							<?php
							$thumbnail = get_sub_field('stavka_image'); ?>

								<div class="kontakt-info-image clearfix">
                        			<img src="<?php echo $thumbnail['url']; ?>"/>
                        		</div>

                        		<div class="kontakt-info-text clearfix">
                        			<?php the_sub_field('stavke_informacija'); ?>
                        		</div>          
							


							</ul>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<div class="contact-form clearfix">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form HR"]'); ?>
				</div>

			</div>


	</div>

</div>



<?php // if(ICL_LANGUAGE_CODE=='hr'): echo do_shortcode('[contact-form-7 id="4" title="Contact form HR"]'); else: echo do_shortcode('[contact-form-7 id="64" title="Contact form ENG"]'); endif; ?>







<!--	=================================================
     	================== GOOGLE MAP ===================
        =================================================     -->

<div class="google-map-wrap container clearfix">
	<h3 class="page-subtitle bold"> <span class="red"><?php _e('Gdje', 'stribor_kontakt') ?></span> <?php _e('smo', 'stribor_kontakt'); ?></h3>

		<div class="acf-map container clearfix">

				<?php
					$location = get_field('google_map');
					        if( !empty($location)):
					   ?>
		                    
		                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		                    

					<?php endif;
					?>

		</div>


</div>








<?php get_footer(); ?>