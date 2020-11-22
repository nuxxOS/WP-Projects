<?php
/**
 * Template name: Interaktivna karta
 */

   get_header(); ?>
  <?php if (have_posts()) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

function render_map( $el ) {

	var $markers = $el.find('.marker');

  gmarkers = [];
	
	var args = {
		zoom            : 14,
		center          : new google.maps.LatLng(45.35189479999999, 19.002257600000007),
		mapTypeId       : google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true
	};
                
	var map = new google.maps.Map( $el[0], args);

	map.markers = [];

	$markers.each(function(){
		add_marker( $(this), map );
	});
	
	
jQuery('.filterlist .check').click(function() {
	jQuery(this).toggleClass("checked");
	jQuery(this).toggleClass("unchecked");
	var category = $(this).attr('data-tip'); 
	if ( $( this ).hasClass( "checked" )) {
		show(category);
	} else {
		hide(category);
	}
});	
	
jQuery('.zoomlist .check').click(function() {
	jQuery('.zoomlist .check').removeClass("checked");
	jQuery('.zoomlist .check').addClass("unchecked");
	jQuery(this).removeClass("unchecked");
	jQuery(this).addClass("checked");
	var udaljen = $(this).attr('data-udaljenost');
	console.log(udaljen);
	showu(1);
	hideu(udaljen);
});

}

function show(category) {
	for (var i=0; i<gmarkers.length; i++) {
		if (gmarkers[i].mycategory == category) {
			gmarkers[i].setVisible(true);
		}
	}
}

function hide(category) {
	for (var i=0; i < gmarkers.length; i++) {
		if (gmarkers[i].mycategory == category) {
			gmarkers[i].setVisible(false);
		}
	}
	//infowindow.close();
}
	
function showu(udaljenost) {
	for (var i=0; i<gmarkers.length; i++) {
		if (gmarkers[i].udaljenost > udaljenost) {
			gmarkers[i].setVisible(true);
		}
	}
}

function hideu(udaljenost) {
	for (var i=0; i<gmarkers.length; i++) {
		if (parseInt(gmarkers[i].udaljenost) > parseInt(udaljenost)) {
			gmarkers[i].setVisible(false);
		}
	}
	//infowindow.close();
}
	
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
	
function add_marker( $marker, map ) {

	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	var postType = $marker.attr('data-marker'); 

	var marker = new google.maps.Marker({
		position        : latlng,
		map             : map,
		cat							: postType,
		icon						: "http://vukovarnadlanu.gaussx.com/wp-content/themes/olympos/images/marker/"+postType+".png"
	});

	map.markers.push( marker );


	var udaljenost = calcDistance($marker.attr('data-lat'), $marker.attr('data-lng'), 45.35189479999999, 19.002257600000007);
	marker.mycategory = postType;                                 
	marker.myname = $marker.attr('data-title');                               
	marker.udaljenost = udaljenost;
	gmarkers.push(marker);
	console.log(marker);

	if( $marker.html() )
	{
	 var infowindow = new google.maps.InfoWindow({
			content         : $marker.html()
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
	}

}


$(document).ready(function(){

	$('.acf-map').each(function(){
		render_map( $(this) );
	});

});

})(jQuery);
</script>


		<header>
			<div class="row">
				<div class="span2">
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
				</div>
				<div class="span8 tc">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/map-pointer2.png" alt="<?php _e("Interaktivna karta", "ilium"); ?>"> <?php the_title(); ?></h1>
				</div>
				<div class="span2 last tr">&nbsp;</div>
			</div>
		</header>
		
		<div class="content">
		
			<div class="btns">
				<a href="#" class="filter btn"><img class="normal" src="<?php bloginfo('template_url'); ?>/images/filter.png" alt="Filter"><img class="active" src="<?php bloginfo('template_url'); ?>/images/afilter.png" alt="Filter"></a>
				<ul class="filterlist dd">
					<li class="check checked" data-tip="znamenitost"><?php _e("Discover Vukovar", "ilium"); ?> <span class="radio"></span></li>
					<li class="check checked" data-tip="smjestaj"><?php _e("Accommodation", "ilium"); ?> <span class="radio"></span></li>
					<li class="check checked" data-tip="ugostiteljstvo"><?php _e("Gastronomy", "ilium"); ?> <span class="radio"></span></li>
					<li class="check checked" data-tip="servis-i-ostalo"><?php _e("Services", "ilium"); ?> <span class="radio"></span></li>
					<li class="check checked" data-tip="turist-info"><?php _e("Tourist info", "ilium"); ?> <span class="radio"></span></li>
					<li class="check checked" data-tip="sport-i-rekreacija"><?php _e("Sport", "ilium"); ?> <span class="radio"></span></li>
				</ul>
				<a href="#" class="zoom btn"><img class="normal" src="<?php bloginfo('template_url'); ?>/images/double.png" alt="Filter"><img class="active" src="<?php bloginfo('template_url'); ?>/images/adouble.png" alt="Filter"></a>
				
				<ul class="zoomlist dd">
					<li class="check unchecked" data-udaljenost="500">500 m <span class="radio"></span></li>
					<li class="check unchecked" data-udaljenost="1000">1 km <span class="radio"></span></li>
					<li class="check unchecked" data-udaljenost="2000">2 km <span class="radio"></span></li>
					<li class="check checked" data-udaljenost="5000">5 km <span class="radio"></span></li>
				</ul>
			</div>


			<div class="acf-map">
				<div class="marker moja-lokacija" data-marker="moja-lokacija" data-lat="45.35189479999999" data-lng="19.002257600000007" data-title="<?php _e("My location", "ilium"); ?>">
					<h4><?php _e("My location", "ilium"); ?></h4>
				</div>
				<?php
				$args = array();
				$args['post_type'] = array("servis-i-ostalo", "smjestaj", "ugostiteljstvo", "turist-info", "znamenitost", "sport-i-rekreacija", "biciklisticka-ruta");
				$args['order'] = ASC;
				$args['posts_per_page'] = -1;
				$query = new WP_Query($args);
				while($query->have_posts() ) : $query->the_post(); 
				$location = get_field("mapa");
				$post_type = get_post_type();
				if( $post_type ) {
						$post_type_data = get_post_type_object( $post_type );
						$post_type_slug = $post_type_data->rewrite['slug'];
				}
				if($post_type_slug=="biciklisticka-ruta") {
					$markercat = "sport-i-rekreacija";
				} else {
					$markercat = $post_type_slug;
				}
				if(!empty($location) ): ?>

				<div class="marker <?php echo($post_type_slug); ?>" data-marker="<?php echo $markercat; ?>" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-title="<?php echo the_title(); ?>">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
				<?php endif; ?> 

				<?php endwhile ; wp_reset_postdata();  ?> 
			</div>
			
		</div>


		<?php endwhile;  ?>
	<?php endif; ?> 

<?php get_footer(); ?>