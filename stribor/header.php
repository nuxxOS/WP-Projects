<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Moja ICT karijera" />
		<meta name="keywords" content="programi, ict, gauss, obris, karijera, informatika, IT, programiranje, web, development, project menagment" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php if(is_home()) bloginfo('name'); else wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>


<body <?php body_class(); ?>>


<div class="form-close"></div>
        
<div class="header container-full clearfix">
	<div class="header-logo clearfix">

		<a href="<?php echo home_url(); ?>">

			<?php 

				$image = get_field('header_logo', 'options');

				if( !empty($image) ): ?>

					<img src="<?php echo $image ?>"/>

			<?php endif; ?>

		</a>
	
	</div>


	<a class="menutoggle"></a>
	<nav class="nav menumobile menuoff">

		<?php wp_nav_menu (

			array ('menu' => "Primary menu", 'container' => "false" )

		); ?>		
		
	</nav>

	<div class="sign-up-sidebar-wrap clearfix">
		<div class="triangle"></div>
		<div class="x-button"></div>
		<?php get_sidebar('SidebarOne'); ?>
	</div>

	<a href="<?php echo get_permalink( 115 ); ?>" class="submit request-link">Pošalji Upit</a>
</div>
       
