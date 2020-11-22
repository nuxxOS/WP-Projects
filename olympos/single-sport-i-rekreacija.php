<?php get_header(); ?>
  <?php if (have_posts()) : ?>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	var args = {
		zoom		: 16,
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

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	var postType = $marker.attr('data-marker'); 
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		icon						: "http://vukovarnadlanu.gaussx.com/wp-content/themes/olympos/images/marker/"+postType+".png"
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


function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	if( map.markers.length == 1 )
	{
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		map.fitBounds( bounds );
	}

}

var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>
  	<header>
			<div class="row">
				<div class="span2">
				
				<?php include(locate_template('cptnames.php')); ?> 
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
				</div>
				<div class="span8 tc">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $post_type_slug; ?>.png" alt="<?php echo $post_type_name; ?>"> <?php echo $post_type_name; ?></h1>
				</div>
				<div class="span2 last tr">&nbsp;</div>
			</div>
		</header>
		<div class="main">
				<div class="sidebar">
					<ul class="posts">
						<?php
						
					$tax=get_object_taxonomies( $post_type_slug, 'names' );
							$terms = get_terms($tax[0]);
							foreach($terms as $term){ 
								$current = $wp_query->queried_object;
								$link = get_term_link( $term->slug, $tax[0] ); ?>
								<li><a <?php if($current->slug==$term->slug){echo 'class="active"'; } ?> href="<?php echo $link; ?>"><?php echo $term->name; ?></a></li>
							<?php }
						
						$args = array();
						$args['post_type'] = "biciklisticka-ruta";
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$query = new WP_Query($args);
						while($query->have_posts() ) : $query->the_post();  ?>	
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile;  wp_reset_postdata();
						?>
					</ul>
				</div><!--sidebar-->
				<div class="maincontent">
						<?php while ( have_posts() ) : the_post();
							$location = get_field('mapa'); 
							$adresa = get_field('adresa');
							$mjesto = get_field('mjesto');
							$rv = get_field('radno_vrijeme');
							$email = get_field('email');
							$website = get_field('website');
							$orig_ppost = icl_object_id(get_the_ID(), $post_type_slug, false, 'hr');
							$galerija = get_field('galerija_slika', $orig_ppost);
							$tel = get_field('kontakt_telefon');
					
					?>	
							<h1><?php the_title(); ?></h1>
							<div class="row">
								<div class="span6 sadrzaj">
									<div class="slika"><?php
										if(empty($galerija)) {
											if(has_post_thumbnail()) { the_post_thumbnail('srednje'); } 
										} else { ?>							

											<div id="slider" class="flexslider">
												<ul class="slides"> <?php
													foreach($galerija as $slika) { ?>		
														
													<li style="background:url(<?php echo $slika['sizes']['srednje']; ?>) no-repeat;"></li>
												  <?php	} ?>
												</ul>
											</div>
										<?php } ?>
									</div>
									<?php the_content(); ?>
								</div>
								<div class="span6 last info">
									<?php if( !empty($location) ): ?>
									<div class="acf-map">
										<div class="marker" data-marker="moja-lokacija" data-lat="45.35189479999999" data-lng="19.002257600000007" data-title="<?php _e("My location", "ilium"); ?>">
											<h4><?php _e("My location", "ilium"); ?></h4>
										</div>
										<div class="marker" data-marker="<?php echo $post_type_slug; ?>" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
									</div>
									<?php endif; ?>
									<ul class="podaci">
										<?php if(!empty($adresa)) {?> <li><?php _e("Address", "ilium"); ?>: <span class="podatak"><?php echo $adresa.', '.$mjesto ?></span></li><?php } ?>
										<?php if(!empty($rv)) {?> <li><?php _e("Radno vrijeme", "ilium"); ?>: <span class="podatak"><?php echo $rv; ?></span></li><?php } ?>
										<?php if(!empty($email)) {?> <li><?php _e("Email", "ilium"); ?>: <span class="podatak"><?php echo $email; ?></span></li><?php } ?>
										<?php if(!empty($website)) {?> <li><?php _e("Web", "ilium"); ?>: <span class="podatak"><?php echo $website; ?></span></li><?php } ?>
										<?php if(!empty($tel)) {?> <div class="tel"><?php echo $tel; ?></div><?php } ?>
									</ul>
								</div>
							</div>
						<?php endwhile;  wp_reset_postdata(); ?>
					
				</div><!--content-->
		</div><!--main-->
	<?php endif; ?> 

<?php get_footer(); ?>