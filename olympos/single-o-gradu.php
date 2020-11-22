<?php get_header(); ?>
  <?php if (have_posts()) : ?>		<header>
			<div class="row">
				<div class="span2">
				
				<?php include(locate_template('cptnames.php')); ?> 
					<a href="<?php echo icl_get_home_url() ?>" class="home">h</a>
				</div>
				<div class="span8 tc">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $post_type_slug; ?>.png" alt="<?php _e("Interaktivna karta", "ilium"); ?>"> <?php echo $post_type_name; ?></h1>
				</div>
				<div class="span2 last tr">&nbsp;</div>
			</div>
		</header>
		<div class="main">
				<div class="sidebar">
					<ul class="posts">
						<?php
						global $post;
						$post_slug=$post->post_name;
						$args = array();
						$args['post_type'] = $post_type_slug;
						$args['order'] = ASC;
						$args['posts_per_page'] = -1;
						$query = new WP_Query($args);
						while($query->have_posts() ) : $query->the_post(); 
						$post_id = get_the_ID();
						$queried_post = get_post($post_id);
						?>	
							<li><a  <?php if($post_slug==$queried_post->post_name) {echo 'class="active"';} ?> href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile;  wp_reset_postdata(); ?>
					</ul>
				</div><!--sidebar-->
				<div class="maincontent">
						<?php while ( have_posts() ) : the_post(); ?>	
							<h1><?php the_title(); ?></h1>
							<div class="slika"><?php if(has_post_thumbnail()) { the_post_thumbnail('single', array( 'class' => 'aligncenter' )); } ?></div>
							<?php the_content(); ?>
						<?php endwhile;  wp_reset_postdata(); ?>
					
				</div><!--content-->
		</div><!--main-->
	<?php endif; ?> 

<?php get_footer(); ?>