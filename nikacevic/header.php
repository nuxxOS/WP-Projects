<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        

        <div id="header" class="container-full clearfix">
	        <div class="header">

	        	<div class="logo left">
			    	<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
			    </div>
					
				<div class="page-navigation">

				<div class="nav2">
			    		<ul>
							<li><a href="https://www.facebook.com/nikacevic/"><span class="icon-facebook border"></span></a></li>
							<li><?php do_action('wpml_add_language_selector'); ?></li>
						</ul>
					</div>

					<a class="menutoggle"></a>
					<nav class="nav menumobile menuoff">
						<?php wp_nav_menu (); ?>
					</nav>


					

			    	
				</div>
			</div>

		</div>
	
	    
     	
       
