<?php get_header(); ?>

<?php
    
    /*Template name: Kontakt */

?>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC1y8uk-ddoSkrca8HGUslAIaHUjRFGiDQ
"></script>
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


<!--	=================================================
     	================== BREADCRUMPS ==================
        =================================================     -->



<?php get_template_part('template_parts/banners'); ?>


<div class="kontakt-info-wrap container clearfix">

	<?php if( have_rows('kontakt_repeater') ):  ?>

					<?php while( have_rows('kontakt_repeater') ): the_row(); ?>
					

						<div class="kontakt-info clearfix">
							<div class="kontakt-icon" style="background-color: <?php the_sub_field('kontakt_background_color') ?>"> 
									<?php 

										$image = get_sub_field('kontakt_repeater_icon');
										$link = get_sub_field('kontakt_repeater_link');

										if( !empty($image) ): ?>

										<?php 

											if( !empty($link) ): ?>

											<a href="<?php echo $link ?>">
											<?php endif; ?>


													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

											<?php 

											if( !empty($link) ): ?>

											</a>
											<?php endif; ?>

										<?php endif; ?>




							</div>

							<div class="kontakt-podaci"> 
								<?php the_sub_field('kontakt_repeater_podaci') ?> 
							</div>
						</div>


					<?php endwhile; ?>			  		
		
			<?php endif; ?>

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


<div class="kontakt-form-wrap container clearfix">
	<h2><?php the_field('kontakt_form_naslov'); ?></h2>
	<hr>

		<div class="kontakt-form container clearfix">
			<?php echo do_shortcode('[contact-form-7 id="100" title="Contact form"]'); ?>
		</div>
</div>

		







<?php get_footer(); ?>	